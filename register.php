
<?php require_once("connection.php") ?>

<!DOCTYPE html>
<html>
<head>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Private Message</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	
	<style>
		* {margin:0px; padding:0px;}
		#container{width:300px; margin: 0px auto;}
		.input{width:90%; padding:2%;}
	</style>
</head>


<body>

	<h1 align="center">Registration Form</h1>
	<div id="container">
		<form method="post">
			<input type="text" id="user_name" placeholder="Username" onkeyup="check_user()" name="user_name" class="input" required/><div id="checking"></div><br></br>
			
			<input type="password" placeholder="Password" name="password" class="input" required/><br></br>

			<input type="submit" id="register" name="register" value="Register">
			<a href="login.php">Login here</a>
		</form>
	</div>


	<?php
		if(isset($_POST['register'])){
			$user_name = $_POST['user_name'];
			$password = $_POST['password'];

			$q = "INSERT INTO `users` (`user_name`, `password`) VALUES ('" . $user_name . "', '" . $password . "')";
			$r = mysqli_query($con, $q);

			if($r) {
				header("location:login.php");
			}else{
				echo $q;
			}
		}
	?>

	<script src="sub_file/jquery-3.5.1.min.js"></script>
	<script>
		document.getElementById("register").disabled = true;

		function check_user(){
			var user_name = document.getElementById("user_name").value;
			$.post("sub_file/user_check.php", 
			{
				user: user_name
			},
			function(data){
				document.getElementById("checking").innerHTML = data;

				if(data == '<p style="color:red">User already registered</p>') {
					document.getElementById("register").disabled = true;
				} else {
					document.getElementById("register").disabled = false;
				}
			}

			);
		}
	</script>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>