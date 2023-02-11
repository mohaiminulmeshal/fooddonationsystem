<div id="main-wrapper">
<span style='text-align: center;'><h2><p style="font-family:'Courier New'"><b>NGO LOGIN</b></p></h2></span>
		<div class="imgcontainer">
			<img src="public/image/user.png" alt="Avatar" class="avatar">
		</div>

	<form action="ngo_login" method="post">
		<div class="inner_container">
			<label><b><p style="font-family:'Courier New'">NGO ID</p></b></label>
			<input type="text" placeholder="Enter User ID" name="id" required>
			<label><b><p style="font-family:'Courier New'">PASSWORD</p></b></label>
			<input type="password" placeholder="Enter Password" name="password" required>
			<button class="login_button" name="login" type="submit">LOGIN</button>
			<a href="ngo_register"><button type="button" class="register_btn">CLICK HERE TO REGISTER</button></a>
		</div>
	</form>

	<?php echo $content; ?>
</div>
