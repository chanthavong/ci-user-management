<div>
	<h2>Profile</h2>
	<a href="<?php echo site_url('welcome/logout') ?>">Logout</a>
</div>

<div>
	Hi.  <?php echo $user->fullname ?> <br>
	Email: <?php echo $user->email ?>  <br>
	Status : <?php echo $user->role ?>  <br>

	<a href="<?php echo site_url('profile/edit') ?>">Edit profile</a> &nbsp;
	<a href="<?php echo site_url('profile/changepassword') ?>">Change password</a>
</div>