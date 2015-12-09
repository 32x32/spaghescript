<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
	$caption 		= set_value('caption');
	$description 	= set_value('description');
} else {
	$caption 		= $image->caption;
	$description 	= $image->description;
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Update Existing Image</title>

	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 16px/24px normal 'Oxygen', sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Update Image</h1>

	<div id="body">
		<?php if(validation_errors() || isset($error)) : ?>
			<div class="alert alert-danger" role="alert" align="center">
				<?=validation_errors()?>
				<?=(isset($error)?$error:'')?>
			</div>
		<?php endif; ?>
		<?=form_open_multipart('admin/xtension/gallery/edit/'.$image->id)?>

		  <div class="form-group">
		    <label for="userfile">Image File</label>
		    <div class="row" style="margin-bottom:5px"><div class="col-xs-12 col-sm-6 col-md-3"><?=img(['src'=>$image->file,'width'=>'100%'])?></div></div>
		    <input type="file" class="form-control" name="userfile">
		  </div>

		  <div class="form-group">
		    <label for="caption">Caption</label>
		    <input type="text" class="form-control" name="caption" value="<?=$caption?>">
		  </div>

		  <div class="form-group">
		    <label for="description">Description</label>
		    <textarea class="form-control" name="description"><?=$description?></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary">Save</button>
		  <?=anchor('gallery','Cancel',['class'=>'btn btn-warning'])?>

		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>