<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <div class="am-content">
        <div class="main-content">
<div class="panel" style="min-height: 36em;">
                  
                    <div class="panel-body">
    <div class="row">
        <div class="col-lg-12">
            <h1>Add word in <?php echo strtolower($language_slug);?> dictionary</h1>
            <?php echo form_open();?>
            <div class="form-group">
                <?php
                echo form_label('Word','word');
                echo form_error('word');
                echo form_input('word',set_value('word'),'class="form-control"');
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Root word','root_word');
                echo form_error('root_word');
                echo form_input('root_word',set_value('root_word'),'id="root_word_options" autofocus autocomplete="off"');
                ?>
                <div class="checkbox">
                    <label>
                        <?php
                        echo form_error('noise_word');
                        echo form_checkbox('noise_word','1',set_checkbox('noise_word','1',FALSE)).' Noise word';
                        ?>
                    </label>
                </div>
            </div>
            <?php echo form_error('language_slug');?>
            <?php echo form_hidden('language_slug',set_value('language_slug',$language_slug));?>
            <?php
            $submit_button = 'Add word';
            echo form_submit('submit', $submit_button, 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo anchor('/admin/dictionary/index/'.$language_slug, 'Cancel','class="btn btn-default btn-lg btn-block" onclick="if (window.opener && window.opener.open && !window.opener.closed){window.close()};"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>
</div>
</div>
