<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit adv</div>
		<div class="panel-body">
			<form class="form-horizontal" method="post" action="<?php echo $form_action; ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label class="col-md-2">Name</label>
					<div class="col-md-10">
					<input type="text" value="<?php echo isset($arr->c_name)?$arr->c_name:""; ?>" name="c_name" required class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2"></label>
					<div class="col-md-10">
					<input type="checkbox" <?php echo isset($arr->c_position)&&$arr->c_position==1?"checked":""; ?> name="c_hotadv"> Position
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2">url</label>
					<div class="col-md-10">
					<input type="text" value="<?php echo isset($arr->c_url)?$arr->c_url:""; ?>" name="c_url" required class="form-control">
					</div>
			
				<div class="form-group">
					<label class="col-md-2"></label>
					<div class="col-md-10">
					<input type="file" name="c_img">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2"></label>
					<div class="col-md-10">
					<?php if(isset($arr->c_img)&&file_exists("public/upload/adv/".$arr->c_img&&$arr->c_img!="")){ ?>
					<img src="public/upload/adv/<?php echo $arr->c_img; ?>" style="max-width: 100px;">
					<?php } ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2"></label>
					<div class="col-md-10">
					<input type="submit" value="Process" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>