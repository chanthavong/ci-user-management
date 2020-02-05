<div>
	<h2>Edit Profile</h2>
	<a href="<?php echo site_url('profile') ?>">Back</a>
</div>

<div>
	<form action="<?php echo site_url('profile/save') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<label>select image</label>
		<input type="file" accept="image/*" name="profile_image" value="" placeholder=""> <br>
		<label>Fullname: </label> <br>
		<input type="text" name="fullname" value="<?php echo $user->fullname ?>" placeholder=""> <br>
		<input type="submit" name="save" value="Save">
	</form>
</div>