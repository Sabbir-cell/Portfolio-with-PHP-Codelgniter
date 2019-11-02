<?php $blog = $this->db->get_where('blog',array('id' => $blog_id))->row_array(); ?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form method="post" action="<?php echo site_url('admin/blog/update/'.$blog_id); ?>" class="custom_form" enctype="multipart/form-data">
			<h4 class="mt-1" style="text-align: center;">Blog</h4>
			  <div class="form-row">
			    <div class="col-md-12 mb-3">
					<input type="file" name="file" class="custom-file-input" id="validatedCustomFile">
				    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
				</div>	
			    <div class="col-md-12 mb-3">
			      <label for="validationCustom02">Date and writter name</label>
			      <input type="text" name="datewritter" value="<?php echo $blog['date_writter']; ?>" class="form-control" id="validationCustom02" required>
			    </div>

			    <div class="col-md-12 mb-3">
			      <label for="validationCustomUsername">Caption</label>
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <span class="input-group-text"  id="inputGroupPrepend"></span>
			        </div>
			        <input type="text" name="caption" value="<?php echo $blog['caption'];  ?>" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
			      </div>
			    </div>
			  </div>
			    <div class="col-md-12 mb-3">
			      <label for="validationCustom05">Deatils</label>
			     <textarea name="deatils" class="form-control" placeholder="Deatils about project"><?php echo $blog['deatils']; ?></textarea>
			    </div>
			
			  <div class="row">
				<div class="col-md-12 text-center">
					<input type="submit" class="btn btn-primary w-50" name="" value="Update">
				</div>
			</div>
			<div class="col-12 text-center">
			  	<a class="btn btn-info" href="<?php echo site_url('admin/blog'); ?>">
			  		Back
			  	</a>
  			</div>
	</div>
</form>
