<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="am-content">
        <div class="main-content">

<div class="panel">
                   
        
                    <div class="panel-body">
    <div class="atur">
        <div class="col-lg-12">
            <a href="<?php echo site_url('admin/languages/create');?>" class="btn btn-primary">Add language</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">

            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<tr><td>ID</td><td>Language name</td></td><td>Slug</td><td>Language directory</td><td>Language code</td><td>Default</td><td>Operations</td></tr>';
            if(!empty($languages))
            {

                foreach($languages as $lang)
                {
                    echo '<tr>';
                    echo '<td>'.$lang->id.'</td><td>'.$lang->language_name.'</td><td>'.$lang->slug.'</td><td>'.$lang->language_directory.'</td><td>'.$lang->language_code.'</td>';
                    echo '<td>';
                    echo ($lang->default == '1') ? '<span class="ion-checkmark"></span>' : '&nbsp;';
                    echo '</td>';
                    echo '<td>'.anchor('admin/languages/update/'.$lang->id,'<span class="glyphicon glyphicon-pencil"></span>', array('class' => 'btn btn-primary btn-sm')).' '.anchor('admin/languages/delete/'.$lang->id,'<span class="glyphicon glyphicon-remove"></span>', array('class' => 'btn btn-danger btn-sm')).'</td>';
                    echo '</tr>';
                }

            }
            echo '</table>';
            ?>
        </div>
    </div>
</div>
</div>
</div>


</div>