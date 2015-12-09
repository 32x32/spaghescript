 <div class="am-content">
        <div class="main-content">

<div class="row">
<div align="center"><?=anchor('gallery/add','Add a new image',['class'=>'btn btn-primary'])?></div>
			<hr />	
<?php if($images->num_rows() > 0) : ?>
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="widget widget-fullwidth widget-small">
              
                <div class="table-responsive">
                  <table class="table table-striped table-fw-widget table-hover">
                    <thead>
                      <tr>
                        <th width="5%">Image</th>
                        <th width="5%">Caption</th>
                        <th width="10%">Description</th>
                        <th width="2%">Option</th>
                        
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                     
                     


                      <?php foreach($images->result() as $img) : ?>
			<tr>
			<td class="user-avatar"> <?=img($img->thumb)?></td>
                        <td><?=$img->caption?></td>
                        <td><?=substr($img->description, 0,100)?>...</td>
                        <td><?=anchor('admin/gallery/edit/'.$img->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
								<?=anchor('admin/gallery/delete/'.$img->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>

</td>
			</tr>
				<?php endforeach; ?>
		
		<?php else : ?>
			<div align="center">We don't have any image yet, go ahead and <?=anchor('admin/gallery/add','add a new one')?>.</div>
		<?php endif; ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
     
</div>



</div>
