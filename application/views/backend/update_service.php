<?php $service = $this->db->get_where('service', array('id' => $service_id))->row_array(); ?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form method="post" action="<?php echo site_url('admin/service/update/'.$service_id); ?>" class="custom_form" enctype="multipart/form-data">
			<h4 class="mt-1" style="text-align: center;">Service</h4>
			<div class="form-group">
				<label>Caption</label>
				<input type="text" name="caption" value="<?php echo $service['caption'];?>" class="form-control custom_input">
			</div>

			<div class="form-group">
				<label>Deatils</label>
				<textarea class="form-control custom_input" name="deatils" value="" placeholder="Deatils service"><?php echo $service['deatils']; ?></textarea>
			</div>				
			<div class="row">
				<div class="col-md-12 text-center">
					<input type="submit" class="btn btn-primary w-50" name="" value="Update">
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
