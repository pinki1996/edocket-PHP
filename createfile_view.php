
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
		<?php 
			$username=$_SESSION['username'];
			$tbhead ="SELECT * FROM `dms_users` WHERE username = '".$username."'";
			$tbhead = mysqli_query($connection,$tbhead);
			$row=mysqli_fetch_array($tbhead); 
			$userlevel=$row['userlevel'];
			$loc=$row['userlocation'];
			
			//echo $userlevel;
		?>
			<a style="color: red; font-size:20px;">Entry Form :- <span style="color: blue; text-align: left; font-size:20px;">Create New File<span></a><br><br>
				<section class="panel panel-body">  
					<form class="form-inline  "  method="post"  style="float:center;"><br>
						<div class="form-group">
							<label style="font-size: 15px; color:black;">Created On:</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="date" id="createdon" name="createdon"  value= <?php echo date('Y-m-d H:i:s'); ?> required />
						</div>
						<div class="form-group">
							<label style="text-align: center; font-size: 15px; color:black;">Department:</label>
							
							<?php
 
						echo '<input style="font-size: 15px; color:black;" class="form-control" placeholder="-- SELECT --" list="type" id="department" name="department" onkeypress="myFunction()" required />
								<datalist id="type">						
									';
 
								$sqli = "SELECT * FROM dms_param`";
								$result = mysqli_query($connection, $sqli);
								while ($row = mysqli_fetch_array($result)) {
								echo '<option>'.$row['department'].'</option>';
								}
 
								echo '</datalist>';
 
								?>
						</div>
					
							<!--<input style="font-size: 15px; color:black;" class="form-control" type="hidden" id="fileid" name="fileid"  value=  <?php max(file_id)+1 ?> />-->
						
							
						<div class="form-group">
							<label style="font-size: 15px; color:black;">File No.:</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="fileno" name="fileno"  required />
						</div>
						<div class="form-group">
							<label style=" font-size: 15px;  color:black;">Subject:</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="filesubject" name="filesubject"   />
						</div>
						
						<div class="form-group">
							<label style=" font-size: 15px;   color:black;">Total Pages</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="noofpages" name="noofpages" required />
						</div>
						<div class="form-group">
							<label style=" font-size: 15px; color:black;">Previous File No.	</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="prevfilenm" name="prevfilenm" size="12" required />
						</div>
						<div class="form-group">
							<label style=" font-size: 15px; color:black;">Remarks:</label>
							<textarea style="font-size: 15px; color:black;" class="form-control" type="text" id="fileremarks" name="fileremarks" rows="1" cols="30"  ></textarea>
						</div><br><br>
						<div class="text-center">
							<button  class="btn btn-primary" type="submit" name="cfilesubmit">Submit</button>	
						</div>
						
					</form>
			<?php
		
				if(isset($_POST['cfilesubmit']))
				{  
					
					$department =$_POST["department"];
					$fileno     =$_POST["fileno"];
					$noofpages =$_POST["noofpages"];
					$createdon =$_POST["createdon"];
					$userid =$_SESSION["userid"];
					$filesubject =$_POST["filesubject"];
					$fileremarks =$_POST["fileremarks"];
					$prev=$_POST["prevfilenm"];
					//$next=$_POST["fileid"];
					
				$query="INSERT INTO `dms_files`(`file_id`,`department`, `fileno`,`noofpages`,`createdon`,`filecreator`,`reffilenm`,`currentlocuser`,`filesubject`,`filestatus`,`fileremarks`,`prevfileno`) VALUES ('".$department."','".$fileno."','".$noofpages."',NOW(),'".$userid."','".$userid."','".$filesubject."','U','".$fileremarks."','".$prev."')";
					echo $query ;
					if ($query == mysqli_query($connection, $query)) {
						//echo "Data Submitted";
						
						
					$log_query="INSERT INTO `dms_param`(`department`) VALUES ('".$department."')";
					$log_query = mysqli_query($connection,$log_query);
						//echo "Successfully Done";
						echo "<script>window.location.href='home.php?lvl=2';</script>";
					
      
					}
					else 
					{
					echo "Invalid- Username ID/Password";
      
					}
  
				}
				
			?>

	<?php

if(isset($_POST['cfilesubmit']))
	{
		
$update_query1="UPDATE `dms_files` SET reffilenm=CONCAT('".$loc."','_','".$department."','_',file_id),";
echo  $update_query1;
$update_q1=mysqli_query($connection,$update_query1);

	}
?>
				</section>
			<div>
			<a class="username" style="color:blue;font-size:20px;"><span style="color:red">Master Data:-</span> List Of Files
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
												<th style="color:white">Reffilenm</th>
												<th style="color:white">Department</th>
												<th style="color:white">File No.</th>
												<th style="color:white">Subject</th>
												<th style="color:white">Pending Pages</th>
												<th style="color:white">Total Pages</th>
												<th style="color:white">Previous File No.</th>
												<th style="color:white">Remarks</th>
												
											</tr>
										</thead>
										<tbody id="geeks">
											<?php
												$tablequery1 ="SELECT * from `dms_files` where department= '".$department."'";
												//echo $tablequery1;
												$tableQuery1 = mysqli_query($connection,$tablequery1);
												$i=1;
												while($row1=mysqli_fetch_array($tableQuery1)){ 
											?>
											<tr style="font-size:12px;color:black;background-color:white;" onclick ='toggleText()'>
												<td><?php echo $i++;  ?></td>
												<td><?php echo $row1['reffilenm'];  ?></td> 
												<td><?php echo $row1['department'];  ?></td> 
												<td><?php echo $row1['fileno'];  ?></td>
												<td><?php echo $row1['filesubject'];  ?></td>
												<td><?php echo $row1['rempage'];  ?></td>
												<td><?php echo $row1['noofpages'];  ?></td>
												<td><?php echo $row1['prevfileno'];  ?></td>
												<td><?php echo $row1['fileremarks'];  ?></td>
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