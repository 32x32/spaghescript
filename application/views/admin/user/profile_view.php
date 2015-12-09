<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <div class="am-content">
        <div class="main-content">

<div class="panel">
                    <div class="panel-body">
    <?php echo form_open_multipart('',array('class'=>'form-horizontal'));?>
    <div class="atur">
   
<div class="col-lg-12">
<h4>Profile Information</h4>
<hr>
</div>
    <div class="col-lg-6">

        <div class="col-lg-12">
           
         
            <div class="form-group">
                <?php
                echo form_label('First name','first_name');
                echo form_error('first_name');
                echo form_input('first_name',set_value('first_name',$user->first_name),'class="form-control"');
                ?>
            </div>
          
            <div class="form-group">
                <?php
                echo form_label('Company','company');
                echo form_error('company');
                echo form_input('company',set_value('company',$user->company),'class="form-control"');
                ?>
            </div>
           

      

            
         
        </div>
    </div>


     <div class="col-lg-6">

        <div class="col-lg-12">
           
           
         
            <div class="form-group">
                <?php
                echo form_label('Last name','last_name');
                echo form_error('last_name');
                echo form_input('last_name',set_value('last_name',$user->last_name),'class="form-control"');
                ?>
            </div>
          
            <div class="form-group">
                <?php
                echo form_label('Phone','phone');
                echo form_error('phone');
                echo form_input('phone',set_value('phone',$user->phone),'class="form-control"');
                ?>
            </div>

            


          
           
        </div>
    </div>




<div class="col-lg-12">
<h4>Look and Feel</h4>
<hr>
</div>
 <div class="col-lg-6">
    
        <div class="col-lg-12">

<div class="form-group">
                <?php
                echo form_label('Phone','phone');
                echo form_error('phone');
                echo '<input type="file" name="pics" value="" class="form-control" />';
                ?>
            </div>
        </div>
        </div>
       
 <div class="col-lg-13">
    
        <div class="col-lg-12">

 <?php echo form_submit('submit', 'Save profile', 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo form_close();?>
        </div>
        </div>




    </div>




</div>
</div>
</div>
</div>
