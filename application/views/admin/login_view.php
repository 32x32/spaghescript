<div class="am-splash-screen">
   <div class="am-wrapper am-login"  style="background: inherit;">
      <div class="am-content">
        <div class="main-content">
          <div class="login-container">
            <div class="panel panel-default">
              <div class="panel-heading"><span>Please enter your user information.</span></div><div class="row">
    




              <div class="panel-body">

       
        <?php echo $this->session->flashdata('message');?>
        <?php echo form_open('',array('class'=>'form-horizontal'));?>
         <div class="login-form">
        <div class="form-group">
        <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
            
            <?php echo form_error('identity');?>
            <?php echo form_input('identity','','class="form-control" placeholder="Username"');?>
            </div>
        </div>
        <div class="form-group">
        <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
            
            <?php echo form_error('password');?>
            <?php echo form_password('password','','class="form-control" placeholder="Password"');?>
            </div>
        </div>
     
        <?php echo form_hidden('redirect_to',$redirect_to);?>
        <div class="form-group login-submit">
        <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"');?>
        </div>
        <?php echo form_close();?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
