
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
	
			<a style="color: red; font-size:20px;">Entry Form :- <span style="color: blue; text-align: left; font-size:20px;">Create New Employee<span></a><br><br>
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
			<div>
			<a class="username" style="color:blue;font-size:20px;"><span style="color:red">Master Data:-</span> List Of Employees
		</a>
		</div>
			<div class="content container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive" >
								<form id="ht"  style=" width:100%; overflow-x:scroll;">
									 <table class="table table-bordered "  style=" background-color:white; " id="tblfiles" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" >
										<thead>
											<tr style="background-color:#394a59; font-size: 15px;">
												<th style="color:white">S. No</th>
												<th style="color:white">Action</th>
												<th style="color:white">Employee Code</th>
												<th style="color:white">Employee Name</th>
												<th style="color:white">Department</th>
												<th style="color:white">Location</th>
												<th style="color:white">Creation Date</th>
												<th style="color:white">Company</th>
												<th style="color:white">Contact Number</th>
												<th style="color:white">Status</th>
												
											</tr>
										</thead>
										<tbody id="geeks">
											<?php
												$tablequery1 ="SELECT * from `dms_users`";
												//echo $tablequery1;
												$tableQuery1 = mysqli_query($connection,$tablequery1);
												$i=1;
												while($row1=mysqli_fetch_array($tableQuery1)){ 
											?>
											<tr style="font-size:12px;color:black;background-color:white;" onclick ='toggleText()'>
												<td><?php echo $i++;  ?></td>
												<td><a >Edit</a></td> 
												<td><?php echo $row1['empcode'];  ?></td> 
												<td><?php echo $row1['username'];  ?></td> 
												<td><?php echo $row1['department'];  ?></td>
												<td><?php echo $row1['userlocation'];  ?></td>
												<td><?php echo $row1['createdate'];  ?></td>
												<td><?php echo $row1['company'];  ?></td>
												<td><?php echo $row1['phno'];  ?></td>
												<td><?php echo $row1['userlevel'];  ?></td>
											</tr> 
												<?php } ?>	
										</tbody>
									</table>
								</form>
								 
						</div>
					</div>
				</div>
				
		</div>  
	</div>
</body>
<script>
	 

$(document).ready(function() {  
    $('#tblfiles').DataTable( {  
        initComplete: function () {  
            this.api().columns().every( function () {  
                var column = this;  
                var select = $('<select><option value=""></option></select>')  
                    .appendTo( $(column.footer()).empty() )  
                    .on( 'change', function () {  
                        var val = $.fn.dataTable.util.escapeRegex(  
                            $(this).val()  
                        );  
                //to select and search from grid  
                        column  
                            .search( val ? '^'+val+'$' : '', true, false )  
                            .draw();  
                    } );  
   
                column.data().unique().sort().each( function ( d, j ) {  
                    select.append( '<option value="'+d+'">'+d+'</option>' )  
                } );  
            } );  
        }  
    } );  
} );



</script>
</html>