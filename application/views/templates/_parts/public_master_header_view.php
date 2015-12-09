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
        <?php echo $before_head;?>
    </head>
<!--- block bad isp injection script --->
 <Body>


<div class="am-wrapper">
<nav class="navbar navbar-default navbar-fixed-top am-top-header">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="page-title"><span>Madobox</span></div><a href="index.php" class="navbar-brand"><b><?php echo $website->title;?></b></a>
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
              
               <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Login <span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="<?php echo site_url('admin');?>">Login</a></li>
                  <li><a href="<?php echo site_url('admin/signup');?>">Join now</a></li>
                
                </ul>
              </li>

            <?php } ?>  
            </ul>
            <ul class="nav navbar-nav am-nav-right">
              <?php echo $top_menu;?>
            </ul>
            <ul class="nav navbar-nav navbar-right am-icons-nav">
              
              
             
            </ul>
              <form class="navbar-form carikonten" action="/search" method="post" role="search" style="    background-color: #ef6262;">
          <div class="input-group" style="float:right">
            <input type="text" name="q" class="form-control" placeholder="Type here and hit enter..." style="color:#fff">
            <span class="input-group-btn">
             <input type="submit" style="display:none"/>
              <button type="submit" class="btn btn-default" style="font-size:14px">

                <span class="fa fa-search">
                  <span class="sr-only">Search...</span>
                </span>
              </button>
            </span>
          </div>
        </form>
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