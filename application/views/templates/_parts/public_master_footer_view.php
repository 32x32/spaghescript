<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- <footer style="    position: absolute;
    
    width: 100%;
    height: 30px;
    left: 0;
    text-align: center;">
    <div class="container">
        <p class="footer" style="    background: #68c5b5;
    padding: 10px;
    margin: 0 25px;
    color: #fff;">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>
</footer> -->
</div>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/javascripts/jquery.nanoscroller.js" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/js/main.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/bootstrap/dist/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/theme-switcher/theme-switcher.min.js'); ?>" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js" type="text/javascript"></script>
 <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	
      });
      
      $(window).load(function(){
      	App.pageGallery();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	App.livePreview();
      });
      
    </script>
    <script>
    $(function () {
    function closeSearch() {
            var $form = $('.navbar-collapse form[role="search"].active')
        $form.find('input').val('');
      $form.removeClass('active');
    }

    // Show Search if form is not active // event.preventDefault() is important, this prevents the form from submitting
    $(document).on('click', '.navbar-collapse form[role="search"]:not(.active) button[type="submit"]', function(event) {
      event.preventDefault();
      var $form = $(this).closest('form'),
        $input = $form.find('input');
      $form.addClass('active');
      $input.focus();
    });
    // ONLY FOR DEMO // Please use $('form').submit(function(event)) to track from submission
    // if your form is ajax remember to call `closeSearch()` to close the search container
    $(document).on('click', '.navbar-collapse form[role="search"].active button[type="submit"]', function(event) {
      closeSearch()
      event.preventDefault();

      var $form = $(this).closest('form'),
        $input = $form.find('input');
      $('#showSearchTerm').text($input.val());
           closeSearch() 

    });
    });
    </script>
    <script type="text/javascript">
$(function(){
    var menuWidth=0;
    $('.wrapper a').map(function(){
        menuWidth = menuWidth + $(this).outerWidth(true);
    });
    // + 15px as fix, this maybe vary in your project
    $('.wrapper').css('width', (menuWidth+15)); 
});
</script>
 <?php echo $before_body;?>
</body>
</html>