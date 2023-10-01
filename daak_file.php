<?php
include 'header.php';
include 'nav.php';
error_reporting(0);
$lvl1 = $_GET['lvl1'];
$lvl = '0';
$f_id = (int)$_GET['fid'];  
$f_no = $_GET['fno'];
$doc_id = $_GET['doc_id'];
$id = $_GET['id'];
$docno = $_GET['docno'];
$userid = $_SESSION['userid'];
?>



<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet/v0.7.7/leaflet.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style>

  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 70px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    font-size: 15px;
    color: black;
    background-color: #fefefe;
    margin-top: 2%;
    margin-left: 65%;
    margin-right: 5%;
    width: 34%;
    height: 100%;
    margin-bottom:2%;
  }
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
  font-size: 15px;
  background-color: #fefefe;
  margin: auto;
  padding: 5px;
  border: 1px solid #888;
  width: 45%;
}
.modal-content2 {
  font-size: 15px;
  background-color: #fefefe;
  margin: auto;
  margin-right: 10px:;
  padding: 5px;
  border: 1px solid #888;
  width: 45%;
}
/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.close1 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close2 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close1:hover,
.close2:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

#tbldocs tr.normal td {
    color: #235A81;
    background-color: white;
}
#tbldocs tr.highlighted td {
    color: #FFFFFF;
    background-color: #235A81;
}

 
 input {
 border-color: white;
border-style:ridge;
 }   

  #ac {
    max-height: 50%;
    display: inline-block;
    width: 400px;
    overflow: auto;
  }
  #ab {
    height: 100%;
    display: inline-block;
    width: 100%;
    overflow: auto;
  }
 #myInput {
  background-position: 8px 8px;
  background-repeat: no-repeat;
  width: 20%;
  font-size: 10px;
  padding: 5px 5px 5px 5px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  }
  body {font-family: Arial;}

/* Style the tab */
.tab {
  float: center;
  border: none;
  background-color: #f1f1f1;
  width: 30%;
  height: 200px;  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  text-align: center;
  float: center;
  border: none;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  width: 103px;
  height: 32px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */

div .symbols {
    
    text-align: left;
    font-size: 25px;
    color:black;
}


div.all {
    text-align: center;
    display: inline;

</style>


    <!--main content start -->
    <section id="main-content"> 
	<div style="height:100% ;width:100%; overflow: scroll;"> 
		<section class="wrapper">
		
		   <?php include 'daak_bar.php'; 
			   $tablequery1 ="SELECT * FROM `dms_docs` WHERE doctype='note' and `file_id`='".$_GET['fid']."' ORDER BY `doc_id` DESC limit 1";
						//echo $tablequery1;
						$tableQuery1 = mysqli_query($connection,$tablequery1);
						$row1=mysqli_fetch_array($tableQuery1) 
			?>
			<div><h3  style="color: black; word-spacing: 10px;  font-weight: bold; text-align: left;">DOCUMENT TYPE - 
				<span id="ptext" style="color: black; word-spacing: 10px; font-weight: bold; text-align: center; text-decoration:underline;text-decoration-color:#03C04A;text-decoration-thickness: 3px;">NOTING  :- <?php echo $row1['docno'];?> </span></h3>
			</div>

				<div class="row">
					<div class="col-xs-1">
						<div class="btn-group-vertical" >
							<button id="notetab" class="btn btn-primary tablinks" type="button" style="background-color:#C6F6BE; font-size:20px; color:black;" onclick="openTab(event, 'Noting_tab')">Noting</button>
							<button id="foliotab" class="btn btn-primary tablinks" style="background-color:#1E90FF; font-size:20px; color:black; " onclick="openTab(event, 'Folio_tab')" type="button">Folio</button>
							<input   id="gfg" onkeyup='toggleText()' placeholder="Search" title="Type in a name" style="width:100%; height: 35px; font-size:10px; margin-bottom:0px;" />
							
								<button type="button" value="Add / Create Noting" size="20" style="width:90px; height: 45px; border: none; background-color:#C6F6BE; color:black; font-size:17px; margin-top:200px" id="myBtn" onclick="toggle(this)">(+) Noting 
								</button>
								<button id="myBtn1" style="background-color:#1E90FF; border: none;  width:90px;color:black; font-size:17px; height:35px; width: 90px;">Send File
								</button>
								
							<div style="width: 90px; overflow: auto;"  id="Noting_tab" class="tabcontent">
								
								<form >
									<table style="display:none;"  class="table table-bordered table-striped mb-none"  id="tbldocs">
											<thead>
												<tr style="background-color:#6A9FCB;  font-size:10px;">
															<th style="display:none;color:white"><?php echo 'docno'; ?></th> 
															<th style="display:none;color:white"><?php echo 'doctype'; ?></th> 
															<th style="display:none;color:white"><?php echo 'linkedpath'; ?></th> 
															<th style="display:none;color:white"><?php echo 'linkedfile'; ?></th> 
															<th style="display:none;color:white"><?php echo 'file_id'; ?></th> 
															<th style="display:none;color:white"><?php echo 'doc_id'; ?></th> 
												</tr>
											</thead>
										<tbody>
											<?php
											$tablequery1 ="SELECT docno,doctype,linkedpath,linkedfile,file_id,doc_id FROM `dms_docs` WHERE `file_id`='".$_GET['fid']."' ORDER BY `doc_id` DESC ";
											$tableQuery1 = mysqli_query($connection,$tablequery1);
											$kount = 0;
											while($row1=mysqli_fetch_array($tableQuery1)){ 	
												if ($kount == 0) {
													$lnkpath=$row1['linkedpath'];
													$lnkfile=$row1['linkedfile']; 
													$docno=$row1['docno'];} 
												else { $kount=1 ; } ?>
												<tr style="font-size:9px;color:black;width:auto;" onclick ='toggleText()'>	
													<td ><?php echo $row1['docno'];  ?></td> 
													<td style="display:none"><?php echo $row1['doctype'];  ?></td>
													<td style="display:none"><?php echo $row1['linkedpath'];  ?></td>
													<td style="display:none"><?php echo $row1['linkedfile'];  ?></td>
													<td style="display:none"><?php echo $row1['file_id'];  ?></td>
													<td style="display:none"><?php echo $row1['doc_id'];  ?></td>
												</tr>  <?php
											} ?>
										</tbody>
									</table>
								</form>
							</div>
						</div>
					</div>	
									<!--PDF SECTION-->
   
					<div class="col-lg-6" id="pdfd" >
						<?php
							$tablequery1 ="SELECT * FROM `dms_docs` WHERE doctype='note' and `file_id`='".$_GET['fid']."' ORDER BY `doc_id` DESC limit 1";
							//echo $tablequery1;
							$tableQuery1 = mysqli_query($connection,$tablequery1);
							$row1=mysqli_fetch_array($tableQuery1) 

						?>
						<embed id="pdfv"
							src="<?php echo $row1['linkedpath'];?><?php echo $row1['linkedfile'];?>"
							type="application/pdf"
							frameBorder="2"
							scrolling="auto"
							height="80%"
							width="100%">
						</embed>
					</div>
						

						<!-- The Noting Section -->
						
						<div class="col-lg-5">
							<div id="myModal" class="modal">
								<div class="modal-content">
									<?php
									  if($_GET['doc_id']){
										$query1234="SELECT * FROM `dms_docs` WHERE doc_id = '".$_GET['doc_id']."'";
										//echo $query1234;
										$runQuery1234=mysqli_query($connection,$query1234);
										$edit_row=mysqli_fetch_array($runQuery1234);
									  }
									?>

									<form name="addnote" method="POST" enctype="multipart/form-data" >
										<span class="close">&times;</span>
										<input type="hidden" id="doc_id" name="doc_id" readonly=true size="20" />
										</br></br>
										<div class="modal-body">
											<label><b>NOTING NO. -</b></label>
											<input style="background-color: #eee;" type="text" id="docno" name="docno" placeholder="Type " size="20"/><br/><br/>
											<input type="hidden" id="doc_id" name="doc_id"  readonly=true size="20" />
											<input type="hidden" id="doctype" name="doctype" value= "<?php echo $_GET['doctype'];?>" readonly=true size="20" />
											<input type="hidden" id="createdon" name="createdon" size="17" value= "<?php echo date('Y-m-d '); ?> " readonly=true />
											<input type="hidden" id="department" name="department" value="<?php echo $_GET['department'];?>" readonly=true size="20" />
											<input type="hidden" id="file_id" name="file_id" value="<?php echo $_GET['fid'];?>" readonly=true size="20" />
											  
											<label style="float: left;" for="myfile"><b>ATTACHED FILE -</b></label>
											<input type="file" id="myfile"  name="myfile" size="20"/><br>
											<h5 style="color: black"><b></b></h5>      
											<textarea type="text"  placeholder="Add Noting Remarks" id="text_noting" name="text_noting" rows="25" cols="50" style=" overflow: scroll; background-color:#C6F6BE; color:black;"></textarea>
										</div>
										<div class="modal-footer">    
											<button class="btn btn-default" data-dismiss="modal" value="Add" name="submit2" id="submit2" onclick="return mess();"  >Submit
											</button>
										</div>
									</form>
									<?php
										if(isset($_POST['submit2']))
									  {
										$docno =$_POST["docno"];
										$createdon =$_POST["createdon"];
										$file_id =$_POST["file_id"];
										 $department =$_POST["department"];
										$text_noting =$_POST["text_noting"]; 

										$query="INSERT INTO `dms_docs` (`docno`,`createdon`,`file_id`,`docdepartment`,`text_noting`) VALUES ('".$docno."','".$createdon."','".$file_id."','".$department."','".$text_noting."')";
										$runQuery = mysqli_query($connection,$query); 
									if($runQuery){
										  header("Location:daak_file.php");

									}      }
									?>
								</div>
							</div>
						</div>
						
							<!-- The Send File Section -->

							<div id="myModal1" class="modal1">
								<div class="modal-content1">
									<form method="POST">
										<span class="close1">&times;</span>
										<?php
										  if($_GET['doc_id']){
											$query1234="SELECT * FROM `dms_docs` WHERE doc_id = '".$_GET['doc_id']."'";
											//echo $query1234;
											$runQuery1234=mysqli_query($connection,$query1234);
											$edit_row=mysqli_fetch_array($runQuery1234);
											}
										?>
										<input type="hidden" id="doc_id" name="doc_id" value="<?php echo $edit_row['doc_id'];?>" readonly=true size="20" />
										<input type="hidden" id="linkedfile" name="linkedfile" value="<?php echo $edit_row['linkedfile'];?>" readonly=true size="20" />
										<br><br>
										<div class="modal-body">
											<label style="float: left;"><b>FILE NO. -</b></label>
											<input type="text" id="file_id" name="file_id" style="background-color: #eee;" size="50" value="<?php echo $_GET['fno'];?>" /><br><br>
											<label style="float: left;"><b>FORWARD TO</b></label>
											<select  class="form-control show-tick" value="<?php echo $edit_row['userid'];?>" name="userid"  id="userid">
												<?php 
												  if($_GET['docno'] ) {
													echo "<option value='".$edit_row['userid']."'>".$edit_row['username']."</option>";
												  }
												  else{
												  echo "<option value=''>SELECT</option>";
												  }
													$query1234 = "SELECT * FROM `dms_users` WHERE userid != '".$_SESSION['userid']."' ";
													$runQuery1234=mysqli_query($connection,$query1234);
													  while($row1234=mysqli_fetch_array($runQuery1234)){ ?>
													<option value="<?php echo $row1234['userid'];?>"><?php echo $row1234['username'];?></option>
							  
												<?php
												   }
												?>
											</select>
										</div>
										<br>
										<div class="modal-footer"> 
											<button value="Add" name="submit1" id="submit1" style="border-radius: 12px; padding: 5px; cursor: pointer; font-size: 15px; color: black; border: transparent; background-color: #1E90FF;">SEND
											</button>
											
								<?php
									if(isset($_POST['submit1']))
									{
										$userid =$_POST["userid"];
										$update_query1="UPDATE `dms_files` SET currentlocuser= '".$userid."' where file_id='".$_GET['fid']."'";
										echo  $update_query1;
										$runQuery=mysqli_query($connection,$update_query1);
										//echo $query;
										if($runQuery){
											echo "<script>window.location.href='home.php?lvl=4';</script>";
											}
										else{
											echo '<script>error();</script>';
											}
									}
								?>
										</div>
									</form>
								</div>
							</div>    

                           
							
                               <!-- The Comment Section -->

							<div class="col-lg-5"  id="addcomment" >
								<section class="panel">
									<header class="panel-heading">
										COMMENTS
										<div class="widget-icons pull-right">
											<button id="myBtn2" style="font-size: 15px; max-height: 30px; background-color: #eee; color:  grey; border-color: transparent;"><b>ADD<i class="fas fa-comment"></i></b>
											</button>     

											<div id="myModal2" class="modal2">
												<div class="modal-content2">
													<form name="form1" method="POST" >
													  <span class="close2">&times;</span><br>
														<div class="modal-body">
															<label style="float: left;">FILE NO. -</label>
															<input style="background-color: #eee;"  id="fno"  name="fno" value="<?php echo $_GET['fno'];?>"  size="50"/><br><br>
															<input type="hidden" style="background-color: #eee;"  id="send_date" name="send_date" size="10" value= <?php echo date('Y-m-d'); ?> />
															<input type="hidden" style="background-color: #eee;"  id="fid" name="fid" size="10" value= "<?php echo $_GET['fid'];?>" />
														  
												  
															<label>ADD COMMENT</label>
															<textarea type="text" id="remarks" name="remarks"  style="overflow: scroll; color:black;" rows="8" cols="45">
															</textarea>
														</div>
														<div class="modal-footer"> 
															<button value="Add" name="submit1" id="submit1" onclick="return submitChat()" style="border-radius: 12px; padding: 5px; cursor: pointer;">SUBMIT
															</button>
														</div>
													</form>
												</div>
											</div>    
										</div> 
											<?php
											if(isset($_POST['submit1']))
											  {
											$username   = $_SESSION['username'];
											$userid     = $_SESSION['userid'];
											$remarks    = $_POST['remarks'];
											$fno        = $_POST['fno'];
											$fid        = $_POST['fid'];
											$send_date  = $_POST['send_date'];


											$query="INSERT INTO dms_remarks (`userid`, `username`, `fileno` ,`fid` , `send_date`,  `remarks`) VALUES ('".$userid."','".$username."','".$fno."','".$fid."','".$send_date."','".$remarks."')";
											$query1 = mysqli_query($connection, $query);
											if($query1){
												  header("Location:daak_file.php");
											}
											}
											?>  
									</header>
									<div class="panel-body" style= " height:75%; overflow: scroll; ">
										<?php
										  $tablequery ="SELECT * FROM `dms_remarks` ORDER BY `id` DESC";
										  //echo $tablequery;
										  $tableQuery = mysqli_query($connection,$tablequery);            
										  $i=1;                   
										  while($row=mysqli_fetch_array($tableQuery)){
										?>
										<ul class="chats" >
											<li class="by-other">
												<div class="chat-content">
													  <div class="chat-meta"><?php echo $row['send_date'];  ?>
														<span class="pull-right"><?php echo $row['username']; ?>
														</span>
													  </div>
										  <?php echo $row['remarks']; ?>
												</div>
											</li> 
										</ul>
											<?php
											  $i++;
											  }     
											?>
									</div>
								</section>
							</div>
					
				</div>  		
		</section>
	</section>
	<script type="text/javascript">

  function mess()
   {
  if(addnote.text_noting.value == '')
  {
    alert('Enter your noting!!!');
    return true;
  }
  {
    alert("Your Noting is successfully saved");
    return true;
  }
  }


       
 
 function openTab(evt, TabName) {

  if (TabName == 'Noting_tab') 
		{
			var pstyle   = "color: black; word-spacing: 10px; font-weight: bold; text-align: left; text-decoration:underline; text-decoration-color:#03C04A;text-decoration-thickness: 3px;";
			var omyFrame = document.getElementById("pdfv");
			omyFrame.style.display="block";
			omyFrame.src = "<?php echo $row1['linkedpath'];?><?php echo $row1['linkedfile'];?>";
			var ptxt = "NOTING :- <?php echo $row1['docno'];?> ";
		
		}  
	else 
		{
			var pstyle   = "color: black; word-spacing: 10px; font-weight: bold; text-align: left; text-decoration:underline; text-decoration-color:#1E90FF;text-decoration-thickness: 3px;";
			var omyFrame = document.getElementById("pdfv");
			<?php
				$tablequery1 ="SELECT docno,doctype,linkedpath,linkedfile,file_id,doc_id FROM `dms_docs` WHERE doctype='docs' and `file_id`='".$_GET['fid']."' ORDER BY `doc_id` DESC limit 1";
                $tableQuery1 = mysqli_query($connection,$tablequery1);
                $row1=mysqli_fetch_array($tableQuery1) 

			?>
			omyFrame.style.display="block";
			omyFrame.src = "<?php echo $row1['linkedpath'];?><?php echo $row1['linkedfile'];?>";
			var ptxt =  "FOLIO :- <?php echo $row1['docno'];?> " ;
			
		}

	var phead = document.getElementById("ptext");
	phead.setAttribute('style', pstyle);
	phead.innerHTML = ptxt;
  
  }


//start comment section script
    function submitChat()
  
  {
  if(form1.remarks.value == '')
  {
    alert('Enter your message!!!');
    return;
  }
   

   
    $('#imageload').show();
    var remarks = form1.remarks.value;
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function()
      {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
          document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
          $('#imageload').hide();
        }
      }
      xmlhttp.open('GET', '&remarks='+remarks, true);
      xmlhttp.send();

}//end comment section script

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}

// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}


function toggleText(tblvar) {
      var input, filter, table, tr, td, i,currow;
      var tbvar = 'tbldocs';
      var table = document.getElementById(tbvar);

      var phead = document.getElementById("ptext").innerHTML.substr(0,5);
	  if (phead == 'NOTIN') { phead = 'note'; } else { phead = 'docs' }


      if (tbvar=='tbldocs') {
        var txtvar = 'gfg'; } else {
        var txtvar = 'gfg1'; }
            input = document.getElementById(txtvar);
            filter = input.value.toUpperCase();
      if (filter != "") {
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
		  txtType  = table.rows[i].cells[1].innerHTML;
		  
          if ((txtValue.toUpperCase().indexOf(filter) > -1) && (txtType==phead)) {
          tr[i].style.display = "";
          currow = i;
          } else {
          tr[i].style.display = "none";
          }
        }
        }
        document.getElementById(txtvar).onkeypress = function(event){
          if (event.keyCode == 13 || event.which == 13){
            var row = table.rows[currow];
			if(currow==null){
				alert("Record Does Not Exist");
			}else{
            populatepdf(row);
            populateFields(row);
          }
		  }
        };

        }
    var thead = table.getElementsByTagName("thead")[0];
    var tbody = table.getElementsByTagName("tbody")[0];
    var ishigh;
    tbody.onclick = function (e) {

       
        e = e || window.event;
        var td = e.target || e.srcElement
    var row = td.parentNode
        if (ishigh && ishigh != row) {
            ishigh.className = '';
        } 
        row.className = row.className === "highlighted" ? "highlighted" : "highlighted";
        ishigh = row; 
    populatepdf(row);
        populateFields(row);
    }

    document.onkeydown = function (e) {
        e = e || event;
        var code = e.keyCode,
            rowslim = table.rows.length - 2,
            newhigh;
        if (code === 38) { //up arraow
            newhigh = rowindex(ishigh) - 2;
            if (!ishigh || newhigh < 0) {
                return GoTo('tbldocs', rowslim);
            }
            return GoTo('tbldocs', newhigh);
        } else if (code === 40) { //down arrow
            newhigh = rowindex(ishigh);
            if (!ishigh || newhigh > rowslim) {
                return GoTo('tbldocs', 0);
            }
            return GoTo('tbldocs', newhigh);
        }
    }

    function GoTo(id, nu) {
        var obj = document.getElementById(id),
            trs = obj.getElementsByTagName('TR');
        nu = nu + 1;
        if (trs[nu]) {
            if (ishigh && ishigh != trs[nu]) {
                ishigh.className = '';
            }
            trs[nu].className = trs[nu].className == "highlighted" ? "" : "highlighted";
            ishigh = trs[nu];
        }
        
        populateFields(trs[nu]); 
    }

    function rowindex(row) {
        var rows = table.rows,
            i = rows.length;
        while (--i > -1) {
            if (rows[i] === row) {
                return i;
            }
        }
    }
    
    function el(id) {
        return document.getElementById(id);
    }
    
    function populatepdf(row) {
       var  pdfpath = row.cells[2].innerHTML;
       var  pdfname = row.cells[3].innerHTML;
     var embedUrl = pdfpath+pdfname;
     var embed = document.getElementById("pdfv");
       embed.setAttribute('src', embedUrl);
       embed.setAttribute('type', 'application/pdf');
       embed.setAttribute('frameborder', "2");
       embed.setAttribute('scrolling', "auto");
       embed.setAttribute('height', "80%");
       embed.setAttribute('width', "100%");
     

     }

      

    
    function populateFields(row) {
    var phead = document.getElementById("ptext");
    var ptxt = phead.innerHTML;
    if (ptxt.substr(0,5)== '<b>NO' || ptxt.substr(0,5) =='NOTIN') {
      ptxt = 'NOTING';
    } else { ptxt = 'FOLIO' ;}

	
    ptxt = ptxt+" :- "+row.cells[0].innerHTML;
    phead.innerHTML = ptxt;
        //embed.innerHTML=embedUrl;
     }


      

} //end of nested function

</script>

</html>

