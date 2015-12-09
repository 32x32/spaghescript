<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <div class="am-content">
        <div class="main-content">

<div class="panel">
                    <div class="panel-body">
    <div class="atur">
        <div class="col-lg-12">
            <a href="<?php echo site_url('admin/groups/create');?>" class="btn btn-primary">Create group</a>
        </div>
  
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($groups))
            {
                echo '<table class="table table-hover table-bordered table-condensed">';
                echo '<tr><td>ID</td><td>Group name</td></td><td>Group description</td><td>Operations</td></tr>';
                foreach($groups as $group)
                {
                    echo '<tr>';
                    echo '<td>'.$group->id.'</td><td>'.anchor('admin/users/index/'.$group->id, $group->name).'</td><td>'.$group->description.'</td><td>'.anchor('admin/groups/edit/'.$group->id,'<span class="ion-edit"></span>', array('class' => 'btn btn-default btn-sm'));
                    if(!in_array($group->name, array('admin','members'))) echo ' '.anchor('admin/groups/delete/'.$group->id,'<span class="glyphicon glyphicon-remove"></span>');
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </div>
</div>
</div>
</div>

</div>

