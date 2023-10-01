	

		<?php
		  include 'db.php';
error_reporting(0);?>
	
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
			 $('#viewtable').hide();
		    $('#example').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		            'excel', 'print'
		        ]
		    } );
		} );
		</script>
	<div class="row">
								<div class="col-md-12">
					
						<?php 
							
								if($rowes!=NULL or $count >=0){
								?>
							
								
	
								<?php 
								

							//$queryes ="SELECT * FROM ".$page." WHERE tbl_name='".$parameter."' AND `fld_tag`LIKE 'T%'";
							//$runQueryes = mysqli_query($connection,$queryes);
							//$rowes = mysqli_fetch_array($runQueryes);
								if($rowes!=NULL  OR $count>=0){	
								if($_SESSION['rights'] != 'NO'){
								?>
								
							
							
										
						<div class="col-xs-12">
							<section class="panel">
							<header class="panel-heading">
								<h3 class="panel-title"><strong style="color:red;">Master Data :- </strong><strong style="color:blue;"><?php echo $name;?></strong></h3>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf" >
									<thead>
										<tr style="color:white;background:#1C3334;font-size:15;width:auto;">
											
											<th><center>Action</center></th>
											<?php $i=1;?>
											<th><center>Sr. No.</center></th>
											<?php
											$table_header_query ="";
											if($all==''){
											$table_header_query ="SELECT * FROM ".$page." WHERE `tbl_name`='".$parameter."' and fld_show='Y' and `fld_table_seq`!='0'  ORDER BY `page`.`fld_table_seq` ASC" ;
											}
											else{
												$table_header_query ="SELECT * FROM ".$page." WHERE `tbl_name`='".$parameter."' and `fld_table_seq`!='0'  ORDER BY `page`.`fld_table_seq` ASC" ;
											}
											$table_header_Query = mysqli_query($connection,$table_header_query);
							
											while($table_header_row = mysqli_fetch_array($table_header_Query))
											{
											?>	
												<th><center><?php echo $table_header_row['fld_caption'];?></center></th>
												
											<?php
											}
											?>
							
										</tr>
										</thead>
											
										<tbody>
										<?php
										$table1_header_query1 ="SELECT * FROM ".$page." WHERE `tbl_name`='".$parameter."' and fld_primery='y'";

										$table1_header_Query1 = mysqli_query($connection,$table1_header_query1);
							
										$table1_header_row1 = mysqli_fetch_array($table1_header_Query1);
										$tablequery ='';
										if($sec_filter !=''){
											if($_SESSION[$sec_filter] != ''){
											$condi = $_SESSION[$sec_filter];
											}
											else
											{
												$condi ='';
											}
										}
										if($filter!=''){
											if($condi ==''){
										$tablequery ="SELECT * FROM ".$parameter." where ".$filter." ORDER BY ".$parameter.".".$table1_header_row1['fld_name']." DESC ";
											}
											else{
												$tablequery ="SELECT * FROM ".$parameter." where ".$filter." and station='".$condi."' ORDER BY ".$parameter.".".$table1_header_row1['fld_name']." DESC ";
											}
											}
										else{
											if($condi ==''){
										$tablequery ="SELECT * FROM ".$parameter." where filestatus!='U' ORDER BY ".$parameter.".".$table1_header_row1['fld_name']." DESC";
											}
										}
										//echo $tablequery;
										$tableQuery = mysqli_query($connection,$tablequery);
						
										?>
										<?php
											while($tablerow = mysqli_fetch_array($tableQuery)){
								
										?>
										 
										<?php
											
							
										$data1231=$table1_header_row1['fld_name'];
								
										?>	
											<tr style="font-size:12px;color:black;width:auto;">
										
										<td class="actions" style="padding: 10px 10px;" >
											<a href="view.php?department=<?php echo $tablerow['department'];?>&id=<?php echo $tablerow['file_id'];?>&paremeter=dms_docs&title=<?php echo $name;?>&path=<?php echo $path;?>&object_show=<?php echo $all;?>" class="btn btn-primary">VIEW</a>
													
										</td>
										<td style="padding: 10px 10px;" ><center><?php echo $i++;?></center></td>
											<?php
											$table1_header_query='';
												if($all=='')
										{
										$table1_header_query ="SELECT * FROM ".$page." WHERE `tbl_name`='".$parameter."' and fld_show='Y' and `fld_table_seq`!='0'  ORDER BY `page`.`fld_table_seq` ASC ";
										}
										else
										{
											$table1_header_query ="SELECT * FROM ".$page." WHERE `tbl_name`='".$parameter."' and `fld_table_seq`!='0'   ORDER BY `page`.`fld_table_seq` ASC";
										}
										$table1_header_Query = mysqli_query($connection,$table1_header_query);
							
										while($table1_header_row = mysqli_fetch_array($table1_header_Query))
										{
								$data123=$table1_header_row['fld_name'];
							 if($table1_header_row['hlp_tbl']!='' and $table1_header_row['fld_auto']==''){
									$d123=$table1_header_row['fld_name'];
									$str = str_replace(".",",",$table1_header_row['hlp_tbl']);
									$arr =explode(",",$str);
									$a_query ="SELECT * FROM ".$arr[0]." WHERE ".$arr[1]."='".$tablerow[$d123]."'";
									//echo $a_query;
							$a_Query = mysqli_query($connection,$a_query);
							$a_row = mysqli_fetch_array($a_Query);
							 ?>	
							<td style="padding: 10px 10px;" ><?php echo $a_row[$arr[2]];?></td>
								<?php }
								else if($table1_header_row['fld_type']=='file'){
									if($tablerow[$data123]!=''){
									echo '<td style="padding: 2px 2px;"><image id="myImg1" class="img" height="50px" width="100px"  src="'.$tablerow[$data123].'"></td>';
									}
									else{
										echo "<td></td>";
									}
								}
								else if($table1_header_row['chg_status']=='Y')
								{
									?>
									<td><button type="button" class="btn btn-link" 
									onclick="chg_status('<?php echo $tablerow[$data123] ?>','<?php echo $table1_header_row['fld_hlp'] ?>','<?php echo $data123 ?>','<?php echo $data1231 ?>','<?php echo $tablerow[$data1231] ?>','<?php echo $parameter ?>')">
									<?php echo $tablerow[$data123] ?> </button></td>
									<?php 
								}
								else {?>
							 
									<td style="padding: 10px 10px;" ><?php echo $tablerow[$data123];?></td>
												
												<?php
								}
							}
							
												?>
												
												
											</tr>
											<?php }
							
							?>
							
										</tbody>
									</table>
								
								</div>
							
					</section>
						</div>
				
								<?php }
								}							?>
							
	<?php 
	}
	?>

				</section >
					
	</div>
		
				<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
			
			

			<!-- Examples -->
			<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
		

	<?php
		include '../includes/footer.php';
		?>