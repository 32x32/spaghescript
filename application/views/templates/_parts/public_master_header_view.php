<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
    <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $website->title;?></title>
        
        <link href="<?php echo site_url('style/ph1/lib/stroke-7/style.css');?>" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.nanoscroller/0.8.7/css/nanoscroller.min.css" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
        <link href="<?php echo site_url('style/ph1/css/style.css');?>" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo site_url('style/ph1/lib/jquery.niftymodals/css/component.css');?>" rel="stylesheet"> 
        <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
        <?php echo $before_head;?>
<style>
    @media (min-width: 1200px)
{
.container {
    width: 1090px;
}
.am-wrapper {
    margin: 0;
    background-color: transparent;
        min-height: 100%;
   
    height: 100%;
    margin: 0 auto -60px;
}
.navbar-default {
    margin: 0;
}
}
</style>
    </head>
<!--- block bad isp injection script --->
<Body>

 
  

<div class="am-wrapper">
<nav class="navbar navbar-default navbar-fixed-top am-top-header">
  <div class="container menure">
        <div class="container-fluid">
          <div class="navbar-header logonya">
            <div class="page-title"><span><?php echo $website->title;?></span></div><a href="/" class="navbar-brand"><b style="    font-family: 'Gloria Hallelujah', cursive;
    font-size: 18px;"><?php echo $website->title;?></b></a>
          </div><a href="#" data-toggle="collapse" data-target="#am-navbar-collapse" class="am-toggle-top-header-menu collapsed"><span class="icon s7-more"></span></a>
         


          <div id="am-navbar-collapse" class="collapse navbar-collapse ">

            <ul class="nav navbar-nav navbar-right am-user-nav mobidrop">
            <?php
            if($this->ion_auth->logged_in()) {
            ?>

              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="<?php echo site_url(); ?>public/media/<?php echo $this->ion_auth->user()->row()->pics;?>"> <?php echo $this->ion_auth->user()->row()->first_name;?><span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="<?php echo site_url('admin/user/profile');?>">Profile page</a></li>
                  <li><a href="<?php echo site_url('admin/user/logout');?>">Logout</a></li>
                
                </ul>
              </li>

            <?php } else { ?>
              
               <li class="dropdown"><a href="#" data-modal="login-modal" class="md-trigger">Login</a>
               
              </li>

            <?php } ?>  
            </ul>
            <ul class="nav navbar-nav am-nav-right">
              <?php echo $top_menu;?>
            </ul>
            <ul class="nav navbar-nav navbar-right am-icons-nav">
              
              
             
            </ul>
              <form class="navbar-form carikonten" action="/search" method="post" role="search" style="    background-color:#transparent;">
          <div class="input-group" style="float:right">
            <input type="text"  name="q" class="form-control" placeholder="What do you search for..." style="color:#fff; width: 210px;" id="country" autocomplete="off">
            <ul class="dropdown-menu txtcountry" style="
                    border: 0px solid #ccc;
    border: 0px solid rgba(0,0,0,.15);
             
    border-radius: 0px;
    -webkit-box-shadow: 0 0px 0px rgba(0,0,0,.175);
            
            " role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>
            <span class="input-group-btn">
             <input type="submit" style="display:none"/>
              <button type="submit" class="btn btn-default" style="font-size:14px;">

                <span class="fa fa-search">
                  <span class="sr-only">Search...</span>
                </span>
              </button>
            </span>
          </div>
        </form>
          </div>
    </div>
        </div>


    



      </nav>



<div>
    <div class="subnav">
      <div class="wrapper" style="    margin-top: 12px;">
        
        
        
        
        
      
        
       <?php echo $mobi_top_menu;?>
      </div>
      
</div>

</div>