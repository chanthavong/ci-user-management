<div>
	<h2>Profile</h2>
	<a href="<?php echo site_url('welcome/logout') ?>">Logout</a>
</div>

<div>
<div class="profile">
	<?php if ($user->profile): ?>
		<img src="<?php echo base_url('uploads/'.$user->profile) ?>" alt="">
	<?php endif ?>
</div>
	
	Hi.  <?php echo $user->fullname ?> <br>
	Email: <?php echo $user->email ?>  <br>
	Status : <?php echo $user->role ?>  <br>

	<a href="<?php echo site_url('profile/edit') ?>">Edit profile</a> &nbsp;
	<a href="<?php echo site_url('profile/changepassword') ?>">Change password</a>
</div>

<style type="text/css">
	.profile img{
		width: 150px;
		height: 150px;
		border-radius: 50%;
		object-fit: fill;
	}
</style>