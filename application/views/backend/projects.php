<div class="row">
  <div class="col-12">
  	<a class="btn btn-primary float-right" href="<?php echo site_url('admin/projects/create_projects'); ?>">
		Create projects
	</a>
  </div>
</div>
<table class="table" style="box-shadow: 5px 5px 50px #cdcdcd;">
	<thead class=" text-primary">
		<th>
			Tittle
		</th>
		<th>
			Made
		</th>
		<th>
			Option
		</th>
	</thead>
	<tbody>
		<?php $projects = $this->db->get_where('projects')->result_array();
		foreach($projects as $projects){?>
			<tr>
				<td>
					<?php echo $projects['tittle']; ?>
				</td>
				<td>
					<?php echo $projects['made']; ?>
				</td>
				<td>
					<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
					  <ul class="dropdown-menu">
					    <li class="text-center bg-primary"><a class="text-white" href="<?php echo site_url('admin/projects/update_projects/'.$projects['id']); ?>">Update</a></li>
					    <li class="text-center bg-primary mt-1"><a class="text-white" href="<?php echo site_url('admin/projects/delete/'.$projects['id']); ?>">Delete</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>