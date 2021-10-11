<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . "/social donors/functions-page.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Social Donors</title>
</head>
<style type="text/css">
	input{
		display: block;
		padding: 10px;
		margin: 10px;
	}
	h1{
		color:red;
		padding-left: 10px;
		text-align: center;
	}
	h2{
		color: red;
		text-align: center;
	}
	  .{
		padding: 10px;
        font-size: 15px;
         color: white;
        background: #d60505;
        border: none;
        border-radius: 5px;
	}
	form{
		width: 30%;
        margin: 0px auto;
        padding: 20px;
        border: 1px solid #B0C4DE;
        background: white;
        border-radius: 0px 0px 10px 10px;
	}
	input{
		display: block;
        text-align: left;
        margin: 3px;
		font-size: 16px;
		margin: 10px 0px 10px 0px;
		border: 1px solid gray;
	}
</style>
<body>
<h1>Social Donors</h1>

<?php 
	if (isset($_SESSION['email'])) {
		$email = $_SESSION['email'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
		$id = $_SESSION['id'];
		$image = $_SESSION['image'];
		

		// alert('you are logged in');

		include_once($_SERVER['DOCUMENT_ROOT'] . "/social donors/profile-form.php");
	}

?>


<h2>Sign up form</h2>
<form action="load-page.php" method="post" enctype='multipart/form-data'>
	<input type="text" name="firstname" placeholder="First Name">
	<input type="text" name="lastname" placeholder="Last Name">
	<input type="text" name="username" placeholder="Username">
	<input type="text" name="email" placeholder="Email">
	<input type="text" name="gender" placeholder="Gender">
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