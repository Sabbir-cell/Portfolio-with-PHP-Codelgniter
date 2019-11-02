  <div class="row">
  	<div class="col-md-2"></div>
  	<div class="col-md-8">
  		<form method="post" action="<?php echo site_url('admin/projects/create'); ?>" class="custom_form" enctype="multipart/form-data">
  			<h4 class="mt-1" style="text-align: center;">Projects</h4>
  			<div class="custom-file">
				<input type="file" name="file" class="custom-file-input" id="validatedCustomFile" required>
			    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
			    <div class="invalid-feedback">Example invalid custom file feedback</div>
			</div>	
  			<div class="form-group">
  				<label>Tittle</label>
  				<input type="text" name="tittle" class="form-control custom_input">	
  			</div>
  			<div class="form-group">
  				<label>Made For</label>
  				<input type="text" name="madefor" class="form-control custom_input" placeholder="Client??? or???">
  			</div>
  			<div class="row">
				<div class="col-md-12 text-center">
					<input type="submit" class="btn btn-primary w-50" name="" value="Submit">
				</div>
			</div>
      <div class="col-12 text-center">
          <a class="btn btn-info" href="<?php echo site_url('admin/projects'); ?>">
            Back
          </a>
        </div>
  		</form>
	</div>
  </div>
</form>
