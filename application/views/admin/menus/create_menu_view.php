<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="col-md-10" id="content">
<div class="panel" style="min-height: 36em;">
                    <div class="panel-heading" style="background-color:#111;color:#fff;">Admin Panel</div>   
                    <div class="panel-body">
    <div class="row">
        <div class="col-lg-12">
            <h1>Create menu</h1>
            <?php echo form_open();?>
            <div class="form-group">
                <?php
                echo form_label('Title','title');
                echo form_error('title');
                echo form_input('title',set_value('title'),'class="form-control"');
                ?>
            </div>
            <?php
            $submit_button = 'Add menu';
            echo form_submit('submit', $submit_button, 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo anchor('/admin/menus', 'Cancel','class="btn btn-default btn-lg btn-block"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>
</div>
</div>

</div>
</div>