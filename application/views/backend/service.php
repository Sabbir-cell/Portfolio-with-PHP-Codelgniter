<div class="row">
  <div class="col-12">
  	<a class="btn btn-primary float-right" href="<?php echo site_url('admin/service/create_service'); ?>">
		Create Service
	</a>
  </div>
</div>
<table class="table" style="box-shadow: 5px 5px 50px #cdcdcd;">
	<thead class=" text-primary">
		<th>
			Caption
		</th>
		<th>
			Deatils
		</th>
		<th>
			Option
		</th>
	</thead>
	<tbody>
		<?php $service = $this->db->get_where('service')->result_array();
		foreach($service as $service){?>
			<tr>
				<td>
					<?php echo $service['caption']; ?>
				</td>
				<td>
					<?php echo $service['deatils']; ?>
				</td>
				<td>
					<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
					  <ul class="dropdown-menu">
					    <li class="text-center bg-primary"><a class="text-white" href="<?php echo site_url('admin/service/update_service/'.$service['id']); ?>">Update</a></li>			
					    <li class="text-center bg-primary mt-1"><a class="text-white" href="<?php echo site_url('admin/service/delete/'.$service['id']); ?>">Delete</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>