<div class="row">
<table class="table" style="box-shadow: 1px 1px 40px #cdcdcd;">
	<thead class=" text-primary">
		<th>
			Name
		</th>
		<th>
			Email
		</th>
		<th>
			Subject
		</th>
		<th>
			Message
		</th>
	</thead>
	<tbody>
		<?php $contacts = $this->db->get_where('contact')->result_array();
		foreach($contacts as $contact){?>
			<tr>
				<td>
					<?php echo $contact['name']; ?>
				</td>
				<td>
					<a href="mailto:<?php echo $contact['email']; ?>">	<?php echo$contact['email']; ?></a>
				</td>
				<td>
					<?php echo $contact['subject']; ?>
				</td>
				<td>
					<?php echo $contact['message']; ?>
				</td>
				<td>
					<div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
					  <ul class="dropdown-menu">
					    <li class="text-center bg-primary mt-1"><a class="text-white" href="<?php echo site_url('admin/contact/delete/'.$contact['id']); ?>">Delete</a></li>
					  </ul>
					</div>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>