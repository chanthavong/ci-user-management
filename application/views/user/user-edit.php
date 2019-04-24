<div class="container form-box">
	<h1>Edit User</h1>
<form action="<?php echo site_url('user/save') ?>" method="post" accept-charset="utf-8">
	<label for="">Fullname</label>
	<input type="text" name="fullname" value="<?php echo $user->fullname ?>" placeholder="fullname" class="control"
	 required="">
	<label for="">Email</label>
	<input type="email" name="email" value="<?php echo $user->email ?>" placeholder="Email" class="control" 
	required="">
	<label for="">Password</label>
	<input type="text" name="password"
	 value="<?php echo $this->encrypt->decode($user->password); ?>" placeholder="Password" class="control"
	required="">
	<label for="">Role Type</label>
	<select name="role" class="control">
		<?php 
			if($user->role=='admin'){
				echo '<option value="admin" selected>Admin</option>';
			}
		 ?>
		<option value="user">User</option>
		<option value="admin">Admin</option>
	</select>
	<div>
		<input type="hidden" name="id" value="<?php echo $user->id ?>">
		<input type="submit" name="save" value="save">
		<a href="<?php echo site_url('user') ?>">Cancel</a>
	</div>
</form>	
</div>
