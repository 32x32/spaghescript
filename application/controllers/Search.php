<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Public_Controller {

    function index($search_terms = '', $start = 0)
    {
        // If the form has been submitted, rewrite the URL so that the search
        // terms can be passed as a parameter to the action. Note that there
        // are some issues with certain characters here.
        if ($this->input->post('q'))
        {
            redirect('/search/' . $this->input->post('q'));
        }
        
        if ($search_terms)
        {
            // Determine the number of results to display per page
            $results_per_page = $this->config->item('results_per_page');
            
            // Mark the start of search
            $this->benchmark->mark('search_start');
            
            // Load the model, perform the search and establish the total
            // number of results
            $this->load->model('page_model');
            $results = $this->page_model->search($search_terms, $start, $results_per_page);
            $total_results = $this->page_model->count_search_results($search_terms);
            
            // Mark the end of search
            $this->benchmark->mark('search_end');
            
            // Call a method to setup pagination
            $this->_setup_pagination('/search/' . $search_terms . '/', $total_results, $results_per_page);
            
            // Work out which results are being displayed
            $first_result = $start + 1;
            $last_result = min($start + $results_per_page, $total_results);
        }

        $this->data['search_terms'] =$search_terms;
        $this->data['first_result'] =@$first_result;
        $this->data['last_result'] =@$last_result;
        $this->data['total_results'] =@$total_results;
        $this->data['results'] =@$results;


        
        // Render the view, passing it the necessary data
        $this->render('search_results');
        
        // Enable the profiler
      
    }
    
    /**
     * Setup the pagination library.
     *
     * @param string $url The base url to use.
     * @param string $total_results The total number of results.
     * @param string $results_per_page The number of results per page.
     * @return void
     * @author Joe Freeman
     */
    function _setup_pagination($url, $total_results, $results_per_page)
    {
        // Ensure the pagination library is loaded
        $this->load->library('pagination');
        
        // This is messy. I'm not sure why the pagination class can't work
        // this out itself...
        $uri_segment = count(explode('/', $url));
        
        // Initialise the pagination class, passing in some minimum parameters
        $this->pagination->initialize(array(
            'base_url' => site_url($url),
            'uri_segment' => 4,
            'total_rows' => $total_results,
            'per_page' => $results_per_page
        ));
    }
}

/* End of file pages.php */
/* Location: ./system/application/controllers/pages.php */