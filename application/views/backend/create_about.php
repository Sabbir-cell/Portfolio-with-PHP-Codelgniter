<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8 ">
		<form method="post" action="<?php echo site_url('admin/about/create'); ?>" class="custom_form">
			<div class="form-group">
				<label>About Myself</label>
				<textarea name="about_my_self" class="custom_input form-control" placeholder="Deatils About"></textarea>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label> Tools expertenss</label>
						<input type="text" name="tools_name" class="custom_input form-control" placeholder="Tools name">
					</div>
					<div class="col-md-6">
						<label>Percent</label>
						<input type="number" name="percent" class="custom_input form-control" min="0" max="100" placeholder="Percent">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<input type="submit" class="btn btn-primary w-50" name="" value="submit">
				</div>
			</div>
			<div class="col-12 text-center">
			  	<a class="btn btn-info" href="<?php echo site_url('admin/about'); ?>">
			  		Back
			  	</a>
  			</div>
		</form>
	</div>
</div>