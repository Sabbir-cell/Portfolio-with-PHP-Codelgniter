<div class="row">
  <div class="col-12">
  	<a class="btn btn-primary float-right" href="<?php echo site_url('admin/projects_deatils/create_projects_deatils'); ?>">
		Create projects Deatils
	</a>
  </div>
</div>
<table class="table" style="box-shadow: 5px 5px 50px #cdcdcd;">
	<thead class=" text-primary">
		<th>
			Project
		</th>
		<th>
			Tittle
		</th>
		<th>
			Client Name
		</th>
		<th>
			Website Name
		</th>
		<th>
			Completed Date
		</th>
		<th>
			Deatils
		</th>
		<th>
			Option
		</th>
	</thead>
	<tbody>
		<?php $project_deatils = $this->db->get_where('project_deatils')->result_array();
		foreach($project_deatils as $projects_deatil){?>
			<tr>
				<td>
					<?php echo $projects_deatil['name']; ?>
				</td>
				<td>
					<?php echo $projects_deatil['tittle']; ?>
				</td>
				<td>
					<?php echo $projects_deatil['client']; ?>
				</td>
				<td>
					<?php echo $projects_deatil['website']; ?>
				</td>
				<td>
					<?php echo $projects_deatil['complite']; ?>
				</td>
				<td>
					<?php echo $projects_deatil['deatils']; ?>
				</td>
				<td>
					<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
					  <ul class="dropdown-menu">
					    <li class="text-center bg-primary"><a class="text-white" href="<?php echo site_url('admin/projects_deatils/update_projects_deatils/'.$projects_deatil['id']);  ?>">Update</a></li>
					    <li class="text-center bg-primary mt-1"><a class="text-white" href="<?php echo site_url('admin/projects_deatils/delete/'.$projects_deatil['id']); ?>">Delete</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>