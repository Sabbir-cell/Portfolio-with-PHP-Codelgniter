<div class="row">
  <div class="col-12">
  	<a class="btn btn-primary float-right" href="<?php echo site_url('admin/about/about_form'); ?>">
		Create about
	</a>
  </div>
</div>
<table class="table" style="box-shadow: 1px 1px 40px #cdcdcd;">
	<thead class=" text-primary">
		<th>
			About
		</th>
		<th>
			Tools name
		</th>
		<th>
			percent 
		</th>
		<th>
			Option
		</th>
	</thead>
	<tbody>
		<?php $abouts = $this->db->get_where('about')->result_array();
		foreach($abouts as $about){?>
			<tr>
				<td>
					<?php echo $about['about_my_self']; ?>
				</td>
				<td>
					<?php echo $about['tools_name']; ?>
				</td>
				<td>
					<?php echo $about['percent']; ?>
				</td>
				<td>
					<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
					  <ul class="dropdown-menu">
					    <li class="text-center bg-primary"><a class="text-white" href="<?php echo site_url('admin/about/update_about/'.$about['id']); ?>">Update</a></li>
					    <li class="text-center bg-primary mt-1"><a class="text-white" href="<?php echo site_url('admin/about/delete/'.$about['id']); ?>">Delete</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>