	<div id="main-wrapper">
	<center><h2><p style="font-family:'Courier New'"><b>DONOR LOGIN</b></p></h2></center>
			<div class="imgcontainer">
				<img src="public/image/user.png" alt="Avatar" class="avatar">
			</div>
		<form action="/donor_login" method="post">
			<div class="inner_container">
				<label><b><p style="font-family:'Courier New'">USER ID</p></b></label>
				<input type="text" placeholder="Enter User ID" name="id" required>
				<label><b><p style="font-family:'Courier New'">PASSWORD</p></b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit">LOGIN</button>
				<a href="register"><button type="button" class="register_btn">CLICK HERE TO REGISTER</button></a>
			</div>
		</form>

		<?php echo $content; ?>

	</div>
