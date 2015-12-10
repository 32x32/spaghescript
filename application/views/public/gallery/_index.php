<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="
    margin-top: 40px;
">
  
  
<div class="stufftit" style="
">
<div class="stuffp" style="
">latest pics</div>
  </div>
        <div class="panel main-content">



	
		<?php if($images->num_rows() > 0) : ?>
			
			<?php if($this->session->flashdata('message')) : ?>
				<div class="alert alert-success" role="alert" align="center">
					<?=$this->session->flashdata('message')?>
				</div>
			<?php endif; ?>

				

			<div class="gallery-container">
				<?php foreach($images->result() as $img) : ?>
			<div class="item">
              <div class="photo">
                <div class="img"><?=img($img->thumb)?>
                  <div class="over">
                    <div class="func"><a href="<?php echo  site_url($img->file); ?>" class="image-zoom" title="<?=$img->caption?>"><i class="icon s7-search"></i></a></div>
                  </div>
                </div>
                <div class="description">
                 
                  <div class="desc">
                    <h4><?=$img->caption?></h4><span><?=substr($img->description, 0,100)?>...</span>
                  </div>
                </div>
              </div>
            </div>
				<?php endforeach; ?>
			</div>
		<?php else : ?>
			<div align="center">We don't have any image yet, go ahead and <?=anchor('gallery/add','add a new one')?>.</div>
		<?php endif; ?>
	</div>
	</div>

	