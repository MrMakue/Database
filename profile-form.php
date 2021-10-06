<form action="load-page.php" method="post" enctype='multipart/form-data'>
	<input type="text" hidden name='email' value='<?php echo("". $_SESSION['email']); ?>'>
	<h1>Welcome <?php echo("". $_SESSION['name'] .' '. $_SESSION['surname'] ); ?>, Your profile</h1>

	<p>Profile image<br> <img src="<?php echo("images/$image") ?>" width="300px">
		<br>
		<input type='file' name='image' accept='image/*' id="image">
		<br>
		<input type="submit" name="update_profile_picture" value="Update my profile picture">

	</p>
	<p>Name <input type="text" name="name" value='<?php echo("". $_SESSION['name']); ?>'></p>
	<p>Surname <input type="text" name="surname" value='<?php echo("". $_SESSION['surname']); ?>'></p>
	<p>Number <input type="text" name="number" value='<?php echo("". $_SESSION['number']); ?>'></p>
	<hr>

	<input type="submit" name="changes" class="button" value="Update my info">

	<input type="submit" name="logout" class="button" value="logout">

	<p>* Email cannot be changed at this time*</p>
	<p> *This action cannot be undone (feature not availabe at present)* <input type="submit" name="close" value="Close my profile"></p>

	<hr>
</form>