<div>
	<h2>Change password</h2>
	<a href="<?php echo site_url('profile') ?>">Back</a>
</div>

<div>
	<form action="<?php echo site_url('profile/savepass') ?>" method="post" accept-charset="utf-8">
		<label>old password: </label> <br>
		<input type="text" name="oldpass" value="" placeholder="" required="">
		<hr>

		<label>New password: </label> <br>
		<input type="text" name="p1" value="" placeholder="" required="" minlength="4"> <br>
		<label>Re password: </label> <br>
		<input type="text" name="p2" value="" placeholder="" required="" minlength="4"> <br>

		<input type="submit" name="save" value="Save">
	</form>
</div>