
<?php
 include 'db.php';
 $department=$_SESSION['department'];
 $userid=$_SESSION['userid'];
     
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="datatable/jquery.dataTables.min.css">
<link rel="stylesheet" href="datatable/buttons.dataTables.min.css">
<script src="datatable/jquery-3.3.1.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTables.buttons.min.js"></script>
<script src="datatable/buttons.flash.min.js"></script>
<script src="datatable/jszip.min.js"></script>
<script src="datatable/pdfmake.min.js"></script>
<script src="datatable/vfs_fonts.js"></script>
<script src="datatable/buttons.html5.min.js"></script>
<script src="datatable/buttons.print.min.js"></script>

<body>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
	<div class="main-wrapper">
        <div class="page-wrapper">
	
			<a style="color: red; font-size:20px;">Entry Form :- <span style="color: blue; text-align: left; font-size:20px;">Assign Role To Employees<span></a><br><br>
				<section class="panel panel-body">  
					<form class="form-inline  "  method="post"  style="float:center;"><br>
						<div class="form-group">
							<label style="font-size: 15px; color:black;">Employee Code</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="empcode" name="empcode" size="6" required />
						</div>
						<div class="form-group">
							<label style="font-size: 15px; color:black;">Employee Name</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="username" name="username" size="6" required />
						</div>
						<div class="form-group">
							<label style=" font-size: 15px;  color:black;">Department:</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="department" name="department" size="8"  required />
						</div>
						
						<div class="form-group">
							<label style=" font-size: 15px;   color:black;">Location</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="location" name="location" size="12" required />
						</div>
						<div class="form-group">
							<label style=" font-size: 15px; color:black;">Company	</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="company" name="company" size="12" required />
						</div>
						<div class="form-group">
							<label style=" font-size: 15px; color:black;">Create Date</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="date" id="createdate" name="createdate"  value= <?php echo date('Y-m-d'); ?> required />
						</div>
						<div class="form-group">
							<label style=" font-size: 15px; color:black;">Password</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="password" name="password"  required />
						</div><br><br>
						<div class="text-center">
							<button  class="btn btn-primary" type="submit" name="cfilesubmit">Submit</button>	
						</div>
						
					</form>
			<?php
		
				if(isset($_POST['cfilesubmit']))
				{  
					
					$empcode =$_POST["empcode"];
					$username     =$_POST["username"];
					$department =$_POST["department"];
					$location =$_POST["location"];
					$company =$_POST["company"];
					$password =$_POST["password"];
					
				$query="INSERT INTO `dms_users`(`empcode`, `username`, `department`, `userlocation`,  `company`, `createdate`, `password`) VALUES('".$empcode."','".$username."','".$department."','".$location."','".$company."',NOW(),'".$password."')";
					echo $query ;
					if ($query == mysqli_query($connection, $query)) {
						//echo "Data Submitted
					
						//echo "Successfully Done";
						echo "<script>window.location.href='home.php?lvl=8';</script>";
					
      
					}
					else 
					{
					echo "Invalid- Username ID/Password";
      
					}
  
				}
				
			?>

				</section>
			
</html>