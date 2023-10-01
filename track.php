
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
					<a class="username" style="color:blue;font-size:20px;">Track Your File</a><br><br>
						<div class="panel panel-body table-responsive" >
							<form class="form-inline " id="ht">
							<div class="form-group">
								<label style="font-size: 15px; color:black;" for="">Document Type</label>
								<select style="font-size: 15px; color:black;" class="form-control"   name="documentt" id="document" onchange="makeSubmenu1(this.value)" >
								<option value="">--SELECT--</option>
									<option value="fileno">File Number</option>
									<option value="receiptno">Receipt Number</option>
								</select>
							</div>
							<div class="form-group required-field">
									<label style="font-size: 15px; color:black;" class="control-label ">Option</label>
									<select  class="form-control" id="opt" name="optt" size="1">
										<option value="" disabled selected>--Select--</option>
										<option></option>
									</select>
<script type="text/javascript">
<?php
											
											$tablequery1 ="SELECT * FROM  `dms_files` ";
												//echo $tablequery1;
												$tableQuery1 = mysqli_query($connection,$tablequery1);
												$i=1;
												$number_of_result = mysqli_num_rows($tableQuery1);  
												while($row1=mysqli_fetch_array($tableQuery1)){ 
											?>


var c2 = {
fileno: [<?php echo $row1['fileno'];}?>],
receiptno: ["Opendac","Enveloper"],

}
function makeSubmenu1(value) {
if(value.length==0) document.getElementById("opt").innerHTML = "<option></option>";
else {
var c = "";
for(cId in c2[value]) {
c+="<option>"+c2[value][cId]+"</option>";
}
document.getElementById("opt").innerHTML = c;
}
}

function resetSelection1() {
document.getElementById("document").selectedIndex = 0;
document.getElementById("opt").selectedIndex = 0;
}
</script>
						
								</div><br><br>
								<center><button type="submit" class="btn btn-primary">Track</button></center>
							</form>
			</div>
					</div>
				</div>
			</div>
			
			<div class="content container-fluid">
				<div class="row">
					<div class="col-md-12">
					<a class="username" style="color:blue;font-size:20px;">File Status</a><br><br>
						<div class="panel panel-body table-responsive" >
							<form id="ht"  style=" width:100%; overflow-x:scroll;">
								 <table class="table table-bordered "  style=" background-color:white; width:100%" id="tblfiles" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" >
									
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
