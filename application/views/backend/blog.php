<div class="row">
  <div class="col-12">
  	<a class="btn btn-primary float-right" href="<?php echo site_url('admin/blog/create_blog'); ?>">
		Create Blog
	</a>
  </div>
</div>
<table class="table" style="box-shadow: 1px 1px 40px #cdcdcd;">
	<thead class=" text-primary">
		<th>
			Date and writter name
		</th>
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
		<?php $blog = $this->db->get_where('blog')->result_array();
		foreach($blog as $blog){?>
			<tr>
				<td>
					<?php echo $blog['date_writter']; ?>
				</td>
				<td>
					<?php echo $blog['caption']; ?>
				</td>
				<td>
					<?php echo $blog['deatils']; ?>
				</td>
				<td>
					<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
					  <ul class="dropdown-menu">
					    <li class="text-center bg-primary"><a class="text-white" href="<?php echo site_url('admin/blog/update_blog/'.$blog['id']); ?>">Update</a></li>
					    <li class="text-center bg-primary mt-1"><a class="text-white" href="<?php echo site_url('admin/blog/delete/'.$blog['id']); ?>">Delete</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>