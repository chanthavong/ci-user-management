<div class="container form-box">
	<h1>Create new User</h1>
<form action="<?php echo site_url('user/save') ?>" method="post" accept-charset="utf-8">
	<label for="">Fullname</label>
	<input type="text" name="fullname" value="" placeholder="fullname" class="control"
	 required="">
	<label for="">Email</label>
	<input type="email" name="email" value="" placeholder="Email" class="control" 
	required="">
	<label for="">Password</label>
	<input type="text" name="password" value="" placeholder="Email" class="control"
	required="">
	<label for="">Role Type</label>
	<select name="role" class="control">
		<option value="user">User</option>
		<option value="admin">Admin</option>
	</select>
	<div>
		<input type="submit" name="save" value="save">
	</div>
</form>	
</div>
