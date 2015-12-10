<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="
    margin-top: 40px;
">
  
  
<div class="stufftit" style="
">
<div class="stuffp" style="
">latest pics</div>
  </div>
        <div class="panel main-content">

<div align="center">
Results 1 <?php echo $query->num_fields(); ?>
</div>
<hr>

<?php if(isset($_GET["pic"])){ ?>

		
				
			<div class="gallery-container">
			<?php if(is_array(@$query)) { ?>
				<?php foreach($query as $item) : ?>
			
			<div class="item">
              <div class="photo">
                <div class="img"><img src="<?php echo site_url($item->file); ?>">
                  <div class="over">
                    <div class="func"><a href="<?php echo  site_url($item->file); ?>" class="image-zoom"><i class="icon s7-search"></i></a></div>
                  </div>
                </div>
                <div class="description">
                  <div class="icon"><a href="#"><i class="s7-like"></i></a></div>
                  <div class="desc">
                    <h4><?=$item->caption?></h4><span><?=substr($item->description, 0,100)?>...</span>
                  </div>
                </div>
              </div>
            </div>
				<?php endforeach; ?>
				<?php } ?>
			</div>


<?php } ?>


</div>
</div>
</div>
</div>
