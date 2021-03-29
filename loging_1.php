<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color:darkblue;border-right:4">
	<nav class="navbar navbar-expand-sm bg-dark mb-5">
		
		<ul class="navbar-nav">
			<li class="navbar-item">
				<a class="nav-link" href="#"> Logo</a>
			</li>
		</ul>
	</nav>

	<div  class="text-center" style="background-color:orange; width:60%;  height:90%" >
		<div >
			<h1 >Hello</h1>

			<p>Sign in or create an account</P>

		</div>

		<form action="/action_page.php">
			<div class="form_group card-body">
				<label for="user_id" >User 	Name</label>
				<input type="text" class="form-control"id="user_id">
			</div>
			
			<div class="form_group card-body ">
				<label for="pwd" >Password</label>
				<input type="Password" class="form-control"  id="pwd">
			</div>
			
			<div>
				<input type="button" value="login" class="btn btn-primary mb-3">	

			</div>
			<div>
				<input type="button" value="Foget your password?" class="btn  mb-3">	

			</div>			
		
		</form>
	</div>	
</body>
</html>