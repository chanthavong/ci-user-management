<h1>User data</h1>
<a href="<?php echo site_url('user/add') ?>">Add user</a>

<div>
	<table class="table">
		<thead>
			<tr>
				<th>Full name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $key): ?>
				<tr>
				  <td><?php echo $key->fullname ?></td>
				  <td><?php echo $key->email ?></td>
				  <td><?php echo $key->role ?></td>
				  <td>
				  	<a href="<?php echo site_url('user/edit/'.$key->id) ?>">Edit</a>
				  	<a onclick="return confirm('are you want to delete\n user: <?php echo $key->fullname ?> ?')" href="<?php echo site_url('user/delete/'.$key->id) ?>">Delete</a>
				  </td>
			  </tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>