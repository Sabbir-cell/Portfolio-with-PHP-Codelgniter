<?php $about = $this->db->get_where('about', array('id' => $about_id))->row_array(); ?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8 ">
		<form method="post" action="<?php echo site_url('admin/about/update/'.$about_id); ?>" class="custom_form">
			<div class="form-group">
				<label>About Myself</label>
				<textarea name="about_my_self" class="custom_input form-control" placeholder="Deatils About"><?php echo $about['about_my_self']; ?></textarea>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label> Tools expertenss</label>
						<input type="text" value="<?php echo $about['tools_name']; ?>" name="tools_name" class="custom_input form-control" placeholder="Tools name">
					</div>
					<div class="col-md-6">
						<label>Percent</label>
						<input type="number" value="<?php echo $about['percent']; ?>" name="percent" class="custom_input form-control" min="0" max="100" placeholder="Percent">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<input type="submit" class="btn btn-primary w-50" name="" value="Updated">
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