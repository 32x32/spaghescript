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



<!-- Nifty Modal-->
                 






<style>
.footer {
    height: 50px;
    clear: both;
    color: #fff;
    margin-top: 10px;
    background-color: #000;
    border-top: 2px solid #00BCD4;
   
 
    width: 100%;
}
</style>

<footer class="footer" style="    min-height: 0;">
<div class="container">
<p style="
    text-align: left;
    margin-top: 15px;
    color: #fff;
">Copyright © 2015 <a href="/">M.C Nime</a> | <a href="/api">API</a> · <a href="/about">About</a></p>

<p style="text-align:right;
    margin-top: -30px;">Designed by <a href="https://www.facebook.com/profile.php?id=100007594726461" target="_blank">Spaghetti-san</a></p>




</div>
</footer>
</div>
</div>
</div>

<div id="login-modal" class="md-modal colored-header custom-width md-effect-3">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Member Area </h3></h3>
                      </div>
                      
                   
              
                      <div class="modal-body form">
                        
                            <form action="/u/login" method="post">
                        <div class="form-group">
                          <label>Username</label>
                          <input type="email" name="identity" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                       </form>  
                      </div>
                      <div class="modal-footer">
                       
                        <button type="button" data-dismiss="modal" id="login" onclick="$('form').submit();" name="submit" class="btn btn-primary">Login</button>
                      
                      </div>
                     
                    </div>
                  </div>
                  <div class="md-overlay"></div>

    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/javascripts/jquery.nanoscroller.js" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/js/main.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/bootstrap/dist/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/theme-switcher/theme-switcher.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo site_url('style/ph1/lib/smoke/smoke.min.js'); ?>" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="//static.tumblr.com/8wmayn4/EHUnyp19i/jquery.modaleffects.js" type="text/javascript"></script>
    
    <script>
$(function () {
    var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
    var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.am-nav-right li a').each(function () { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;

            if (activePage == linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('active'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
})
    </script>
    
    <?php if(isset($_GET['error']))
    {
 
        $error = $_GET['error'];
            switch($error) {
                case  "101" :
                echo"
                <script>
                window.onload = function(e) {
                 e.preventDefault();
                $.smkAlert({
                    text: 'Username or password invalid',
                    type: 'danger',
                    position:'top-center',
                    icon: 'fa fa-lock',
                    time: 3
                  });
                }; 
                </script>
                ";
                break;
                case  "201" :
                echo"
                <script>
                window.onload = function(e) {
                 e.preventDefault();
                $.smkAlert({
                    text: 'You do not have sufficient permissions to access this page',
                    type: 'danger',
                    position:'top-center',
                    icon: 'fa fa-lock',
                    time: 3
                  });
                }; 
                </script>
                ";
                break;
                case  "202" :
                echo"
                <script>
                window.onload = function(e) {
                 e.preventDefault();
                $.smkAlert({
                    text: 'You do not have sufficient permissions to access this page',
                    type: 'danger',
                    position:'top-center',
                    icon: 'fa fa-lock',
                    permanent: true
                  });
                }; 
                </script>
                ";
                break;
            }    
    }
    
    ?>
    
    <script type="text/javascript">
         $(document).ready(function () {
    $("#country").keyup(function () {
        $.ajax({
            type: "GET",
            cache: false,  
            url: "/json/jpost",
            data:'term='+$("#country").val(),
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#country').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#country').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li><a href="/p/blog/' + value['language_slug'] + '/' + value['content_id'] + '">' + value['title'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        window.location.href = a.link;
    });
});
       </script> 
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
    $(document).ready( function() {
    $('#myCarousel').carousel({
		interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
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