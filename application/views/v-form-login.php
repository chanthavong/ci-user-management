<div class="login">
	<form action="" method="post" accept-charset="utf-8">
		<div>
			<h3>Login</h3>
			<hr>
			<input type="email" name="email" value="" placeholder="Email" autofocus="on" required="">
		</div>
		<div>
			<input type="password" name="password" value="" placeholder="password" minlength="4" required>
		</div>
		<input type="submit" name="login" value="Login">
		<div>
			<?php echo $ms; ?>
		</div>
	</form>
</div>