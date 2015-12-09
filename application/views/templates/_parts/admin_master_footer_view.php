<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <?php
if($this->ion_auth->logged_in()) {
    ?>

<?php } ?>
</div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/js/main.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/bootstrap/dist/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/theme-switcher/theme-switcher.min.js'); ?>" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery-flot/plugins/jquery.flot.orderBars.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery-flot/plugins/curvedLines.js'); ?>" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jvectormap/1.2.2/jquery-jvectormap.min.css" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-fr-merc-en.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-map.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/countup/countUp.min.js'); ?>" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>
    <script src="<?php echo site_url('assets/admin/js/textext.core.js');?>" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo site_url('assets/admin/js/textext.plugin.autocomplete.js');?>" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo site_url('assets/admin/js/textext.plugin.filter.js');?>" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo site_url('assets/admin/js/textext.plugin.ajax.js');?>" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/tinymce/4.1.9/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                selector: ".editor",
                theme : 'modern',
                skin : 'light',
                plugins: [
                    "advlist anchor autoresize autolink link image lists charmap print preview hr pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu template paste textcolor"
                ],
                /*content_css: "css/content.css",*/
                menu : { // this is the complete default configuration
                    table  : {title : 'Table' , items : 'inserttable tableprops deletetable | cell row column'},
                    view   : {title : 'View'  , items : 'visualaid'}
                },
                toolbar: "undo redo | paste pastetext | styleselect | bold italic underline strikethrough superscript subscript hr | formats | removeformat | alignleft aligncenter alignright alignjustify | bullist numlist | link image media | forecolor backcolor | more | code",
                setup: function(editor) {
                    editor.addButton('more', {
                        text: 'more...',
                        icon: false,
                        onclick: function() {
                            editor.insertContent('<!--more-->');
                        }
                    });
                },
                <?php
                if(!empty($uploaded_images))
                {
                echo 'image_list: [';
                $the_files = '';
                foreach($uploaded_images as $image)
                {
                $the_files .= '{title: \''.((strlen($image->title)>0) ? $image->title : $image->file).'\', value: \''.site_url('media/'.$image->file).'\'},';
                }
                echo rtrim($the_files,',');
                echo '],';
                }
                ?>
                image_class_list: [
                    {title: 'None', value: ''},
                    {title: 'Responsive', value: 'img-responsive'},
                    {title: 'Rounded', value: 'img-rounded'},
                    {title: 'Circle', value: 'img-circle'},
                    {title: 'Thumbnail', value: 'img-thumbnail'}
                ],
                image_dimensions: false,
                image_advtab: true,
                relative_urls: false,
                convert_urls: false,
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
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
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dashboard();
      
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


<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.datetimepicker').datetimepicker({
            locale: 'en',
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true,
            showTodayButton: true
        });
    });
</script>

 <script src="<?php echo site_url('style/js/scripts.js');?>"></script>

<?php echo $before_body;?>
</body>
</html>