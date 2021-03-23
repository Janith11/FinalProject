


<?php
$connection=mysqli_connect('localhost','root','','testing_1');
if ($connection) {
	echo "connection successfull";
	else{
		echo "connection fail";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>log in</h1>

		<form>
			<div class="form_control"></div>
			<input type="text" name="user_name" placeholder="type here">
		</div>  <br>

			<div class="form_control">
			<input type="password" name="user_name" placeholder="password" required>
		</div> <br>
			<div class="button">
			<input type="submit"  value="Log in">
			</div>
		</form>

	</div>

</body>
</html>>
<head> 
<link rel="stylesheet" herf="style.css" type="text/css">

</head>
</html>