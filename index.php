<?php require 'header.php'; ?>

		<form action="dashboard.php" method="post">
		<div class="log">
		<img src="avatar2.png" style="height: 60px;">
		<h2>Login Form</h3>	
		<input class="glass" type="text" name="username" placeholder="username"><br>
		<input class="glass" type="password" name="password" placeholder="password"><br>
		<input class="sub" type="submit" value="Submit" style="padding: 8px 15px; border-radius: 5px;">
		<div class="pass">
			<a href="">Forgot Password?</a>
			<a href="">Register</a>
		</div>
	</form>
	
</div>


<?php require 'footer.php'; ?>