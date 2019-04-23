<h1>User data</h1>
<a href="<?php echo site_url('user/add') ?>">Add user</a>

<div>
	<table class="table">
		<thead>
			<tr>
				<th>Full name</th>
				<th>Email</th>
				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $key): ?>
				<tr>
				  <td><?php echo $key->fullname ?></td>
				  <td><?php echo $key->email ?></td>
				  <td>
				  	<a href="">Edit</a>
				  	<a href="">Delete</a>
				  </td>
			  </tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>