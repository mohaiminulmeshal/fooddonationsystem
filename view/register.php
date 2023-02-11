<div id="main-wrapper">
<center><h2><p style="font-family:'Courier New'">REGISTER HERE</p></h2></center>
	<div class="imgcontainer">
		<img src="public/image/user.png" alt="Avatar" class="avatar">
	</div>

<form action="register" enctype="multipart/form-data" method="post">
	<div class="inner_container">
		<label><b><p style="font-family:'Courier New'">ID</p></b></label>
		<input type="text" placeholder="Type your ID" name="id" required>

		<label><b><p style="font-family:'Courier New'">EMAIL</p></b></label>
		<input type="text" placeholder="Type your Email" name="email" required>

		<label><b><p style="font-family:'Courier New'">NAME</p></b></label>
		<input type="text" placeholder="Type your Name" name="name" required>

		<label><b><p style="font-family:'Courier New'">ADDRESS</p></b></label>
		<input type="text" placeholder="Type your Address" name="address" required>

		<label><b><p style="font-family:'Courier New'">PROFILE PICTURE</p></b></label>
		<input type="file" placeholder="" name="image" required accept="image/jpg, image/jpeg, image/png">

		<label><b><p style="font-family:'Courier New'">PHONE NO.</p></b></label>
		<input type="text" placeholder="Type your Phone Number" name="Phone" required>

		<label><b><p style="font-family:'Courier New'">PASSWORD</p></b></label>
		<input type="password" placeholder="Type your Password" name="password" required>

		<label><b><p style="font-family:'Courier New'">CONFIRM PASSWORD</p></b></label>
		<input type="password" placeholder="Type your Password again" name="cpassword" required>

		<button class="sign_up_btn" name="register" type="submit">SIGN UP</button>
		<a href="donor_login"><button type="button" class="back_btn">BACK TO LOGIN</button></a>
	</div>
</form>

<?php echo $content; ?>
</div>
