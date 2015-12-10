<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<style>

#myCarousel .nav a small {
    display:block;
}
#myCarousel .nav {
	background:#000;
	    border-bottom: #00BCD4 2px solid;
}
#myCarousel .nav a {
    border-radius:0px;
}

</style>
<div class="container">
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="http://cdn-live.warthunder.com/uploads/22/d0ffea6c4cb2bc33b11a4dc023b3da28e29ea1/vocaloid_hatsune_miku_tie_aqua_eyes_aqua_hair_1600x900_wallpaper_Wallpaper_2560x1440_www.wall321.com.jpg">
           <div class="carousel-caption">
             </div>
        </div><!-- End Item -->
 
       
                
      </div><!-- End Carousel Inner -->


    	<ul class="nav nav-pills nav-justified">
          <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">Today<small>Ini ini lah</small></a></li>
          <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lelellele</small></a></li>
          <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>dsdsdsd</small></a></li>
          <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Ntap</small></a></li>
        </ul>


    </div><!-- End Carousel -->
</div>
 <div class="container">
       





        <div class="panel">
					<div class="panel-body" style="     text-align: center;
    padding-top: 15%;
    padding-bottom: 15%;">
	<h1>Site is under construction. Be patient</h1>
   
        <div class="col-lg-12">
            <?php
            echo anchor('#','Go back','class="btn btn-primary" onclick="history.back(-1)"');
            ?>
        </div>
    

</div>





</div>
</div>



