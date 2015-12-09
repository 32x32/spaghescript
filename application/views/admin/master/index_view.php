 <div class="am-content">
        <div class="main-content">
<div class="panel">
                    <div class="panel-body">

    <div class="atur">
       
        <div class="col-lg-8">

            <div class="row">

                <div class="col-lg-12">
                   <?php
        echo $this->postal->get();
        ?>
                    <?php
                    echo '<div class="jumbotron text-center"><p>';
                    echo anchor('admin/master/change-website-status','<span class="'.(($website->status=='1') ? 'ion-checkmark-circled text-primary':'ion-close-circled text-danger').'" style="font-size: 40px;"></span>','onclick="return confirm(\'Are you sure you want to change the status of the site?\')"');
                    echo '<br />The site is '.(($website->status=='1') ? 'ONLINE':'OFFLINE');
                    echo '</p></div>';
                    ?>
                </div>
                <?php
                if(isset($writable_directories))
                {
                ?>
                <div class="col-lg-6">
                    <h4>Writable directories</h4>
                    <table class="table table-hover table-condensed">
                        <tbody>
                        <?php
                        foreach ($writable_directories as $area => $directories)
                        {
                            echo '<tr><th colspan="2">'.$area.'/</th></tr>';
                            foreach($directories as $directory => $status)
                            {
                                echo '<tr>';
                                echo '<td>'.$directory.'</td>';
                                echo '<td class="text-right"><span class="'.(($status=='1') ? 'ion-checkmark text-success':'ion-close text-danger').'"></span></td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <?php
                }
                ?>
                <div class="col-lg-6">
                    <h4>Banned IPs</h4>
                    <table class="table table-hover table-condensed">
                        <tbody>
                            <?php
                            if(!empty($banned_ips))
                            {
                                foreach ($banned_ips as $ip)
                                {
                                    echo '<tr>';
                                    echo '<td>'.$ip->ip.'</td>';
                                    echo '<td class="text-right">';
                                    echo anchor('admin/master/remove-ip/'.$ip->id,'<span class="glyphicon glyphicon-remove"></span>','onclick="return confirm(\'Are you sure you want to un-ban IP?\')"');
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            }
                            else
                            {
                                echo '<tr><td>No IPs banned?</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    echo form_open('admin/master/add-ip');
                    echo '<div class="form-group">';
                    echo form_label('IP','ip');
                    echo form_error('ip');
                    echo form_input('ip',set_value('ip'),'class="form-control"');
                    echo '</div>';
                    $submit_button = 'Add banned IP';
                    echo form_submit('submit', $submit_button, 'class="btn btn-primary btn-lg btn-block"');
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h4>The setup</h4>
            <hr>
            <?php echo form_open('');?>
            <div class="form-group">
                <?php
                echo form_label('Website title','title');
                echo form_error('title');
                echo form_input('title',set_value('title',$website->title),'class="form-control"');
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Default page title','page_title');
                echo form_error('page_title');
                echo form_input('page_title',set_value('page_title',$website->page_title),'class="form-control"');
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Admin email','admin_email');
                echo form_error('admin_email');
                echo form_input('admin_email',set_value('admin_email',$website->admin_email),'class="form-control"');
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Contact email','contact_email');
                echo form_error('contact_email');
                echo form_input('contact_email',set_value('contact_email',$website->contact_email),'class="form-control"');
                ?>
            </div>
            <?php
            $submit_button = 'Save setup';
            echo form_submit('submit', $submit_button, 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo form_close();?>

        </div>
        </div>


        </div>
        </div>
        </div>

        </div>
    