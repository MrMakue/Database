<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . "/scibonostream-main/functions-page.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Social Donars</title>
	<script src="https://kit.fontawesome.com/51bc2aa7cb.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        
        <link rel="stylesheet" href="assets/css/styles.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.js"></script>
</head>
<style type="text/css">
	input{
		display: block;
		padding: 10px;
		margin: 10px;
	}
</style>
<body class="boody">
<body>
	<center>
<h1>Social Donars</h1>
<center>
<?php 
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
		$name = $_SESSION['name'];
		$number = $_SESSION['number'];
		$id = $_SESSION['id'];
		$image = $_SESSION['image'];
		$surname = $_SESSION['surname'];

		// alert('you are logged in');

		include_once($_SERVER['DOCUMENT_ROOT'] . "/scibonostream-main/profile-form.php");
	}

?>

<form action="load-page.php" method="post">
	
</form>

<h2>Sign up form</h2>
<form action="load-page.php" method="post" enctype='multipart/form-data'>
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="number" placeholder="Number">
	<input type="text" name="surname" placeholder="Surname">
	<input type="password" name="password" placeholder="Password">
	<input type="text" name="confirm_password" placeholder="Confirm Password">
	<input type='file' name='image' accept='image/*'>
	<input type="submit" name="register">
</form>

<h2>Login form</h2>
<form action="load-page.php" method="post">
	<input type="text" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<input type="submit" name="login">
</form>
</body>
</html>