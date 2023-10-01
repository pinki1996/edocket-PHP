
<?php
 include 'db.php';
error_reporting(0);
 
  $department=$_SESSION['department'];
  //echo $userid;
     
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<link rel="stylesheet" href="datatable/jquery.dataTables.min.css">
<link rel="stylesheet" href="datatable/buttons.dataTables.min.css">
<script src="datatable/jquery-3.3.1.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTables.buttons.min.js"></script>
<script src="datatable/buttons.flash.min.js"></script>
<script src="datatable/jszip.min.js"></script>
<script src="datatable/pdfmake.min.js"></script>

<body>
	<div class="main-wrapper">
        <div class="page-wrapper">
		
            <div class="content container-fluid">
				<div class="row">
					<div class="col-md-12" >
						<div class="table-responsive" >
							<a class="username" style="color:blue;font-size:20px;">Search Files / Documents</a>
									
						</div>
						
							<form id="ht" ">
							  <table class="table table-bordered"  style=" background-color:white; " id="tblfiles" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" >
								
									<thead class="panel-heading">
										<tr style="background-color:#2e3b46; font-size: 17px;">
											<th style="color:white"><b>Action</b></th>
											<th style="color:white"><b>S No</b></th>
											<th style="color:white"><b>File No.</b></th>
											<th style="color:white"><b>Subject</b></th>
											<th style="color:white"><b>Total Pages</b></th>
											<th style="color:white"><b>Created On</b></th>
											<th style="color:white"><b>Linked File</b></th>
											<th style="color:white"><b>Department</b></th>
										</tr>
									</thead>
									<tbody  id="geeks" >
									<?php		
									
											
												$tablequery1 ="SELECT * from `dms_files` where department='".$department."'";
											
												//echo $tablequery1;
												$tableQuery1 = mysqli_query($connection,$tablequery1);
												$i=1;
												while($row1=mysqli_fetch_array($tableQuery1)){ 
											?>
										<tr style="font-size:12px;color:black;background-color:white;width:auto;" onclick ='toggleText()'>
												<td>
													<a href="docs_view.php?fid=<?php echo $row1['file_id']; ?>&fno=<?php echo $row1['fileno']; ?>&department=<?php echo $row1['department']; ?>" class="edit">VIEW<span class="icon-name"></span></a>
												</td>
												<td><?php echo $i++;  ?></td>
												<td><?php echo $row1['fileno'];  ?></td>
												<td><?php echo $row1['filesubject'];  ?></td>
												<td><?php echo $row1['noofpages'];  ?></td>
												<td><?php echo $row1['createdon'];  ?></td>
												<td><?php echo $row1['prevfileno'];  ?></td>
												<td><?php echo $row1['department'];  ?></td>
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
