
<?php
 include 'db.php';
  $department=$_SESSION['department'];
  $userid=$_SESSION['userid'];
 // echo $userid;
     
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
		
	<div class="main-wrapper">
	
        <div class="page-wrapper">
            <div class="content container-fluid">
			<div>
				<a class="username" style="color:blue;font-size:20px;"><span style="color:red">Master Data:-</span> View DAK
					</a>
			</div>
				<div class="row">
					<div class="col-md-12" >
						<div class="table-responsive" >
								
								<form id="ht" style="width:100%;overflow-x:scroll">
									 <table class="table table-bordered "  style=" background-color:white;" id="tblfiles" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" >
										<thead>
											<tr style="background-color:#394a59;; font-size: 17px;">
												<th style="color:white">Action</th>
												<th style="color:white">S No.</th>
												<th style="color:white">Department</th>
												<th style="color:white">File No.</th>
												<th style="color:white">Created By</th>
												<th style="color:white">Created On</th>
												<th style="color:white">Subject</th>
												<th style="color:white">Remarks</th>
											</tr>
										</thead>
										<tbody id="geeks" >
											<?php
											$tablequery ="SELECT * FROM `dms_files` WHERE currentlocuser='".$_SESSION['userid']."' ";
											//echo $tablequery;
											$tableQuery = mysqli_query($connection,$tablequery);
											$i=1;
											while($row=mysqli_fetch_array($tableQuery)){ ?>
											<tr  style="font-size:13px;color:black;width:auto;" onclick ='toggleText()'> 
												<td class="actions" >
													<a href="daak_file.php?fid=<?php echo $row['file_id']; ?>&fno=<?php echo $row['fileno']; ?>&department=<?php echo $row['department']; ?>" class="edit">VIEW<span class="icon-name"></span></a>
												</td>
												<td><center><?php echo $i++;  ?></center></td>	
												<td><?php echo $row['department'];  ?></td> 
												<td><?php echo $row['fileno'];  ?></td>
												<td><?php echo $row['filecreator'];  ?></td>
												<td><?php echo $row['createdon'];  ?></td>
												<td><?php echo $row['filesubject'];  ?></td>
												<td><?php echo $row['fileremarks'];  ?></td>
											</tr> <?php
											} ?>
										</tbody>
									</table>
							</form>
                          
						</div>
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

<?php include 'footer.php'; ?>  
