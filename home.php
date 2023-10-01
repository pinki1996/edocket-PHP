<?php
    include 'header.php';
    include 'nav.php';
	$lvl = $_GET['lvl'];
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src='js/font.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<style>
	div.title:hover, a.title:active {color: red;}
	
</style>
    <!--main content start-->
	<div style="height:100% ;width:100%; overflow: scroll;"> 
    <section id="main-content">
		
		<section class="wrapper" >
		
		<?php 
		 $username=$_SESSION['username'];
		 

		$tbhead ="SELECT * FROM `dms_users` WHERE username = '".$username."'";
		
		$tbhead = mysqli_query($connection,$tbhead);
		$row=mysqli_fetch_array($tbhead); 
		$userlevel=$row['userlevel'];
		//echo $userlevel;
	   ?>
				<!--Info-box start-->
	<div class="row" >
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<a class="" href="home.php?lvl=1">
				<div class="info-box blue-bg">
					<i class="fa fa-search"></i>
						<div class="title" >Search Files / Documents</div>
				</div>
			</a>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<a class="" href="home.php?lvl=2">
				<div class="info-box brown-bg">
					<i class="fas fa-edit"></i>
						<div class="title" >Create New File</div>
				</div>
			</a>    
		</div>

		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<a class="" href="home.php?lvl=3">
				<div class="info-box linkedin-bg">
					<i class="fa fa-plus-square"></i>
						<div class="title">Add Documents</div>
				</div>
			</a>
		</div>


		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<div class="info-box magenta-bg">
				<i class="fa fa-registered"></i>
					<a class="" href="home.php?lvl=5" >
						<div class="title"><span>DAAK REGISTER </span></div></a>
         
			</div>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<a class="" href="home.php?lvl=4">
				<div class="info-box green-bg">
					<i class="fas fa-cloud-download-alt"></i>
						<div class="title" >Incoming DAAK</div>
				</div>
			</a>
		</div>
	
	
       


  

  <!-- Trigger the modal with a button -->
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
			<a class="" href="home.php?lvl=7">
				<div class="info-box purple-bg">
					<i class="fas fa-route"></i>
						<div class="title">TRACK FILE</div>
				</div>
			</a>
		</div>


		
	</div>

<?php
		if (isset($_POST['buttona'])) {
			$lvl = $_POST['buttona']; 
		}
       
		
		if ($lvl == 1) {
            include 'files_view.php';
        }
	
		if ($lvl == 2) {
            include 'createfile_view.php';
        }	
         
    if ($lvl == 3) {
            include 'adddoc_view.php';
        }
		if ($lvl == 4) {
            include 'daak_view.php';
        }
    if ($lvl == 5) {
            include 'createreceipt.php';
        }
    if ($lvl == 6) {
            include 'dispatch.php';
        }
    if ($lvl == 7) {
            include 'track.php';
        }
		 if ($lvl == 8) {
            include 'create_user.php';
        }
		 if ($lvl == 9) {
            include 'assign_user.php';
        }
		if ($lvl == 10) {
            include 'receipt.php';
        }
		if ($lvl == 11) {
            include 'dispatch.php';
        }
		
    ?>
    </div>

          
</body>

  
 
  
   
 <?php
	include 'footer.php'; ?>  
</html>
