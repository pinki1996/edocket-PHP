
<?php
 include 'db.php';
  $department=$_SESSION['department'];
  //echo $userid;
     
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
		<div>
			<a class="username" style="color:blue;font-size:20px;"><span style="color:red">Master Data:-</span> Add Documents
			</a>
		</div>
            <div class="content container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive" >
							<form id="ht"  style=" width:100%; overflow-x:scroll;">
								 <table class="table table-bordered "  style=" background-color:white; width:100%" id="tblfiles" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" >
									<thead >
										<tr style="background-color:#394a59; ">
											<th style="color:white;font-size: 15px;"><b>Action</b></th>
											<th style="color:white"><b>S No.</b></th>
											<th style="color:white">ReFileNm</th>
											<th style="color:white">Department</th>
											<th style="color:white">File No.</th>
											<th style="color:white">Created On</th>
												<th style="color:white">Pending Pages</th>
											<th style="color:white">Total Pages</th>
											<th style="color:white">Subject</th>
											<th style="color:white">Remarks</th>
										</tr>
									</thead>
									<tbody  id="geeks">
										<?php
												$tablequery1 ="SELECT * from `dms_files` where filestatus='U' ";
												//echo $tablequery1;
												$tableQuery1 = mysqli_query($connection,$tablequery1);
												$i=1;
												while($row1=mysqli_fetch_array($tableQuery1)){ 
												
											?>
											<tr  style="font-size:13px;color:black;background-color:white;" onclick ='toggleText()'> 
											
												<td class="actions" >
												<?php
												if($row1['filestatus']=='U'){
												?>
													<a href="add_doc.php?fid=<?php echo $row1['file_id']; ?>&fno=<?php echo $row1['fileno']; ?>&dno=<?php echo $row1['department'];?>&pn=<?php echo $row1['noofpages'];?>" class="edit">ADD<span class="icon-name"></span></a>
												<?php }
												else {?>
													<span>#</span>
												<?php }
												
												
												$tablequery2 ="SELECT * from `dms_docs` where file_id='".$row1['file_id']."' ";
												//echo $tablequery1;
												$tableQuery2 = mysqli_query($connection,$tablequery2);
												$row2=mysqli_num_rows($tableQuery2);?>
											
												</td>

												<td ><center><?php echo $i++;  ?></center></td>
												<td><?php echo $row1['reffilenm'];  ?></td> 
												<td><?php echo $row1['department'];  ?></td> 
												<td><?php echo $row1['fileno'];  ?></td>
												<td><?php echo $row1['createdon'];  ?></td>
												<td><?php echo $row1['noofpages']-$row2;  ?></td>
												<td><?php echo $row1['noofpages'];  ?></td>
												<td><?php echo $row1['filesubject'];  ?></td>
												<td><?php echo $row1['fileremarks'];  ?></td>
											</tr> 
												<?php 
												}
									$sql="update 'dms_files' set 'rempage'='".$row1['noofpages']-$row2."'  where file_id='".$row1['file_id']."' ";
									$sql = mysqli_query($connection,$sql);
									
									if($row1['noofpages']-$row2=$row1['noofpages'])
									{
													
									$sql="update 'dms_files' set 'filestatus'='C' where file_id='".$row1['file_id']."' ";
									$sql = mysqli_query($connection,$sql);
									}
												?>	
									</tbody>
								</table>
								
							</form>
						</div>
					</div>
				</div>
			</div><br>
		<div>
			<a class="username" style="color:blue;font-size:20px;"><span style="color:red">Master Data:-</span> List Of Add Documents
		</a>
		</div>
			<div class="content container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive" >
							<form id="ht"  style=" width:100%; overflow-x:scroll;">
								 <table class="table table-bordered "  style=" background-color:white; width:100%" id="tblfiles1" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" >
									
									<thead style="">
										<tr style="background-color:#394a59; ">
											<th style="color:white"><b>S No.</b></th>
											<th style="color:white;"><b>Doc No.</b></th>
											<th style="color:white">RefDocID</th>
											<th style="color:white">Department</th>
											<th style="color:white">File Id</th>
											<th style="color:white">Doc Type</th>
											<th style="color:white">Created By</th>
											<th style="color:white">Created On</th>
											<th style="color:white">Page Number</th>
											<th style="color:white">Subject</th>
											<th style="color:white">Linked File</th>
										</tr>
									</thead>
									<tbody id="geeks1">
										<?php
											
											$tablequery1 ="SELECT * FROM  `dms_docs`  order by docno ";
												//echo $tablequery1;
												$tableQuery1 = mysqli_query($connection,$tablequery1);
												$i=1;
												$number_of_result = mysqli_num_rows($tableQuery1);  
												while($row1=mysqli_fetch_array($tableQuery1)){ 
											?>
											<tr  style="font-size:13px;color:black;background-color:white;" onclick ='toggleText()' > 
											
												<td ><center><?php echo $i++;  ?></center></td>
												<td><center><?php echo $row1['docno'];  ?></center></td>	
												<td><?php echo $row1['docrefno'];  ?></td>
												<td><?php echo $row1['docdepartment'];  ?></td>
												<td><?php echo $row1['file_id'];  ?></td> 												
												<td><?php echo $row1['doctype'];  ?></td>
												<td><?php echo $row1['doccreator'];  ?></td>
												<td><?php echo $row1['createdon'];  ?></td>
												<td><?php echo $row1['noofpages'];  ?></td>
												<td><?php echo $row1['docsubject'];  ?></td>
												<td><?php echo $row1['linkedfile'];  ?></td>
											</tr> 
												<?php } ?>	
									</tbody>
									</div>
								</table>
								</form>
								
									</div>
								<br/>
							
						</div>
					</div>
				</div>
			</div>				
		</div>	
	</div>	
</body>
</html>
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

$(document).ready(function() {  
    $('#tblfiles1').DataTable( {  
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









