<?php
session_start();
include "dbConnec.php";
error_reporting(0);
if(isset($_POST['logBTN'])){
	$mail = $_POST['gmail'];
	$pass = $_POST['pass'];
	if(empty($mail) || empty($pass)){
		$respons = "<div class='alert alert-danger'>Please Input All fields and then press Login button</div>";
	}
	else{
		$select = $connection->prepare("SELECT * FROM teacher_regi WHERE teacher_gmail = '$mail'");
		$select->execute();
		$row = $select->fetch(PDO::FETCH_ASSOC);
		
		if($row['birthday']== $pass){
			
				$_SESSION['accountID'] = $row['id'];
				$_SESSION['tgmail']= $row['teacher_gmail'];
				$respons = "<div class='alert alert-success'> Login Successfull wait few Secodn....</div>";
				header("refresh:2 url=index.php");
			
		}
		else{
			$respons = "<div class='alert alert-danger'> Password Does not Match</div>";
		}
		
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Teacher Log In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
	#logo{
  border-radius: 100px;
  height: 150px;
  width: 150px;
}
.main{
	border-radius: 20px;
	background-color: rgb(45, 160, 50);
	margin-top: 70px;
}
.maypaga{
	height: 580px;
	background-color: lightcyan;
}
</style>
</head>
<body>
		<div class="container mt-5  maypaga">
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4  main">
					<div style="text-align: center;" class="mt-3">
					<img src="../admin/img/loginLogo.png" id="logo" alt="loading">
					</div>
					<div class="mt-2">
						<h2 class="text-center">Teacher Section Login</h2>
					<?php
					if(isset($respons)){
						echo $respons;
					}
					
					?>
					</div>
					<form action="" method="post">
						<div>
						<input class="form-control mt-3" type="gmail" name="gmail" placeholder="Enter Your G-mail ID">
						</div>
						<div>
						<input class="form-control mt-3" type="password" name="pass" placeholder="Enter Your Password">
						</div>
						<div>
						<button class="btn btn-warning form-control mt-3 mb-4" name="logBTN">
							Login
						</button>
						</div>
						
					</form>
				
				</div>
				<div class="col-4"></div>
			</div>
		</div>	



	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>