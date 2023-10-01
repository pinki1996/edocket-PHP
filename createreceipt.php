

	
<?php
 include 'db.php';
?>
	<div class="main-wrapper">
        <div class="page-wrapper">
				<section class="panel panel-body"> 
					<form class="form-inline "  method="POST">
					<a type="button" class= href="home.php?lvl=10">Generate Receipt</a> |
					<a type="button" href="home.php?lvl=11">Edit</a> |
					<a type="button" href="home.php?lvl=11">Forward</a> |
					<a type="button" href="home.php?lvl=11">Put In A File</a> |
					<a type="button" href="home.php?lvl=11">Close</a> |
					<a type="button" href="home.php?lvl=11">Dispatch</a> |
					<a type="button" href="home.php?lvl=11">Attach File</a> |
					<a type="button" href="home.php?lvl=11">Attach Receipt</a> |
					</form>

</section>
	
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

		<script>
		$(document).ready(function() {
		    $('#example').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		            'excel', 'print'
		        ]
		    } );
		} );
		</script>
	 
		<div id="viewtable">
			<a class="username" style="color:blue;font-size:20px;">Receipt Files</a>
		</div>
			<div class="content container-fluid">
				<div class="row">
					<div class="col-md-12" >
						<div class="table-responsive" >
								<form id="ht"  style=" width:100%; overflow-x:scroll;">
									 <table class="table table-bordered "  style=" background-color:white; " id="tblfiles" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" >
										<thead>
											<tr style="background-color:#394a59; font-size: 15px;">
												<?php $i=1;?>

														<th style="color:white">Sr.No.</th>
														<th style="color:white">Dairy Id</th>
														<th style="color:white">Entry Date</th>
														<th style="color:white">Document Type</th>
														<th style="color:white">Option</th>
														<th style="color:white">Alert</th>
														<th style="color:white">Action</th>
														<th style="color:white">Priority</th>
														<th style="color:white">Doc Type</th>
														<th style="color:white">Letter Date</th>
														<th style="color:white">Receipt Date</th>
														<th style="color:white">For Whom</th>
														<th style="color:white">Remark</th>
											</tr>
										</thead>
									    <tbody>
								<?php
									$selectquery = "select * from receipt_files";

									$query = mysqli_query($connection,$selectquery);

									$nums = mysqli_num_rows($query);
									while ( $result = mysqli_fetch_array($query)) {
								?>
											<tr style="font-size:12px;color:black;background-color:white;" onclick ='toggleText()'>
												<td><?php echo $i++; ?></td>
												<td><?php echo $result['dairyid']; ?></td>
												<td><?php echo $result['edate']; ?></td>
												<td><?php echo $result['documentt']; ?></td>
												<td><?php echo $result['optt']; ?></td>
												<td><?php echo $result['classified']; ?></td>
												<td><?php echo $result['action']; ?></td>
												<td><?php echo $result['priority']; ?></td>
												<td><?php echo $result['doctype']; ?></td>
												<td><?php echo $result['ldate']; ?></td>
												<td><?php echo $result['ddate']; ?></td>
												<td><?php echo $result['whom']; ?></td>
												<td><?php echo $result['remark']; ?></td>
											</tr>
								<?php

									}
								?>
										</tbody>	
									</table>
								</form>
						</div>
					</div>
				</div>
			</div>
									
		</div>
	</div>									
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