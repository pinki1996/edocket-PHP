<?php
    include 'db.php';
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>GITS-eDocs</title>

  <!-- Bootstrap CSS -->

  
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
   <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>	


  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  
 
    <script src="js/scripts.js"></script>
</head>

<body>
	<header class="header dark-bg ">
		<div class="toggle-nav">
			<div class="icon-reorder tooltips"  data-placement="bottom"><i class="fa fa-bars"></i></div>
				<div class="tooltip fade bottom in" style="top: 48px; left: 0px; display: block;">
			</div>
		</div> 
		<a  class="logo"><span class="lite"><b style="font-size: 30px;">e</b>-DOCS </span></a>
      <!--logo end-->
			<div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
				<ul class="nav pull-right top-menu">

					<?php
					   session_start();

					   if(isset($_SESSION['username']))
					   {          
					?>
			<!-- user login dropdown start-->

				<li class="dropdown">
					<a href="" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
						  
						 
						  <span>Welcome <?php echo $_SESSION['username']; ?></span>
						  <i class="caret"></i>
					</a>
					<ul class="dropdown-menu extended logout">              
						<li>
							<a>Logged In:<?php echo $_SESSION['department']; ?></a>
							<a href="logout.php"> Log Out</a>
						</li>
					</ul>
				</li>
					<?php
						} 
						else { 
								header("Location:login.php"); }
			  
					?> 
          <!-- user login dropdown end -->
				</ul>
        <!-- notificatoin dropdown end-->
			</div>
    </header>
    
    <!--header end-->