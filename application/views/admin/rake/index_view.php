<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="col-md-10" id="content">
<div class="panel" style="min-height: 36em;">
                    <div class="panel-heading" style="background-color:#111;color:#fff;"><i class="ion-android-radio-button-on"></i> RAKE Check</div>   
                    <div class="panel-body" style="    text-align: center;
    padding-top: 15%;">
    <div class="row">
        <div class="col-lg-12">
            <h1>RAKE re-check</h1>
            <p>This page is about refreshing the phrases created by the Rapid Keyword Extractor. I would advise you do visit this page and do a check at least once a day.<br />
                If you want to be thorough the best would be if you did this after you've altered some words in the Dictionary page.</p>
            <?php
            echo anchor('admin/rake/check','Check RAKE phrases','class="btn btn-primary"');
            ?>
        </div>
    </div>
</div>
</div>
</div>

</div>
</div>