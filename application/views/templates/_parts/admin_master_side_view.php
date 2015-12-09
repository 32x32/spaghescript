<?php
   function navi2($requestUri)
   {
       @$current_file_name = explode('/', $_SERVER['REQUEST_URI']);
   
       if (@$current_file_name[2] == $requestUri)
       {
           echo 'active';
       }
   }
     
   ?>
   <?php
if($this->ion_auth->logged_in()) {
    ?>
  <div class="am-left-sidebar">
        <div class="content">
          
          <ul class="sidebar-elements">
            <li class="parent"><a href="<?php echo site_url(); ?>admin"><i class="icon s7-monitor"></i><span>Dashboard</span></a>
              
            </li>
            <li class="parent <?php echo navi2("contents"); ?>"><a href="#"><i class="icon s7-news-paper"></i><span>Blog</span></a>
              <ul class="sub-menu">
                <li><?php echo anchor('admin/contents/index/page','Pages');?>
                </li>
                <li><?php echo anchor('admin/contents/index/category','Categories');?></li>
                </li>
                <li><?php echo anchor('admin/contents/index/post','Posts');?></li>
                </li>               
              </ul>
            </li>     
             
            <li class="parent <?php echo navi2("dictionary"); ?>"><a href="#"><i class="icon s7-world"></i><span>Languages</span></a>
              <ul class="sub-menu">
                 <?php
                            foreach($langs as $slug=>$language)
                            {
                                echo '<li>';
                                echo anchor('admin/dictionary/index/'.$slug.'/1',''.$language['name']);
                                echo '</li>';
                            }
                            ?>
              </ul>
            </li>
            <li class="parent <?php echo navi2("users"); echo navi2("groups"); ?>"><a href="#"><i class="icon s7-id"></i><span>Members</span></a>
              <ul class="sub-menu">
                 <li><?php echo anchor('admin/users','Users');?>
                </li>
                <li><?php echo anchor('admin/groups','Groups');?>
                </li>
              </ul>
            </li>

            <li class="parent <?php echo navi2("rake"); echo navi2("master"); ?>"><a href="#"><i class="icon s7-config"></i><span>Settings</span></a>
              <ul class="sub-menu">
                <li><?php echo anchor('admin/rake','RAKE Tool');?>
                </li>
                <li><a href="<?php echo site_url('admin/master');?>">Website settings</a></li>
                </li>
                
              </ul>
            </li>

            <li class="parent <?php echo navi2("xtension"); ?>"><a href="#"><i class="icon s7-plugin"></i><span>Extension</span></a>
              <ul class="sub-menu">
                <li><a href="<?php echo site_url(); ?>admin/xtension/gallery"><i class="icon s7-photo-gallery" style="font-size: 25px; position: absolute; top: 21px;"></i><span style="padding: 30px;">Gallery</span></a>
            </li>
                
                
              </ul>
            </li>


            
            <!--+sb-item('email', 'Email','','envelope')
            +sb-sub-item('email-inbox', 'Inbox', 'email-inbox')
            +sb-sub-item('email-read', 'Email Detail', 'email-read')
            +sb-sub-item('email-compose', 'Email Compose', 'email-compose')
            -->
            <!--+sb-item('typography', 'Typography','typography','text-height')-->
          </ul>
          <!--Sidebar bottom content-->
        </div>
      </div>
      <?php } ?>