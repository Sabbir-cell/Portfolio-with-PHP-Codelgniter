<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form method="post" action="<?php echo site_url('admin/service/create'); ?>" class="custom_form" enctype="multipart/form-data">
			<h4 class="mt-1" style="text-align: center;">Service</h4>
			<div class="form-group">
				<label>Icon</label>
				<input type="file" name="file" class="form-control custom_input">
				 <label class="custom-file-label" for="validatedCustomFile">Choose icon...</label>
			</div>
			<div class="form-group">
				<label>Caption</label>
				<input type="text" name="caption" class="form-control custom_input">
			</div>

			<div class="form-group">
				<label>Deatils</label>
				<textarea class="form-control custom_input" name="deatils" placeholder="Deatils service"></textarea>
			</div>				
			<div class="row">
				<div class="col-md-12 text-center">
					<input type="submit" class="btn btn-primary w-50" name="" value="Submit">
				</div>
			</div>
			<div class="col-12 text-center">
			  	<a class="btn btn-info" href="<?php echo site_url('admin/service'); ?>">
			  		Back
			  	</a>
  			</div>
		</form>	
	</div>
</div>
