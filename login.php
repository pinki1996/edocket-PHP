  <?php
include_once("db.php");
  ob_start();
  error_reporting(0);
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  
</head>

<body class="login-img3-body">
	<div class="container">
					

		<form method='post' class="login-form" >
			<div class="login-wrap">
				<img alt src="img/git.png">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon_profile"></i></span>
							<input type="text" class="form-control" placeholder="Employee Code" name="username" autofocus>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon_key_alt"></i></span>
							<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
			</div>
		</form>
		<div class="text-right">
			<div class="credits">
			</div>
		</div>
	</div>
</body>


<?php


  if(isset($_POST['submit']))
  {  
    $usercode = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($connection, "SELECT * from dms_users where empcode='".$usercode ."' and password='".$password."' ");
	$row = mysqli_fetch_array($query);
    if(is_array($row)) {

        $_SESSION["userid"] = $row['userid'];
        $_SESSION["username"]=$row['username'];
        $_SESSION["password"]=$row['password'];
        $_SESSION["department"]=$row['department'];
	    $_SESSION["userlevel"]=$row['userlevel'];
		$_SESSION["userlocation"]=$row['userlocation'];
        echo "<script>window.location.href='home.php';</script>";
      
    }
    else 
    {
		echo "Invalid- Username ID/Password";
      
    }
  }
  ?>
</html>



 