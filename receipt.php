
<style>
.required-field::before {
  content: "*";
  color: red;
  float: right;
}
</style>

	<div class="main-wrapper">
        <div class="page-wrapper">
		<div class="content container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive" >
            <a style="color: red; font-size:20px;">Entry Form :- <span style="color: blue; text-align: left; font-size:20px;">Receipt DAAK<span></a><br><br>
				<section class="panel panel-body"> 
					<form class="form-inline " onsubmit="openModal()" method="POST">
						<div>
							<input type="hidden" hidden="value" name="dairyid" id="dairyid" value="" readonly="">
							<input type="hidden" hidden="value" name="fileid" id="fileid" value="<?php echo $_GET['fid'];?>"  readonly="">
								
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label required-field ">Receipt Type</label>
									<select onload="resetSelection1()"  class="form-control" name="documentt" id="document" onchange="makeSubmenu1(this.value)">
										<option value="" disabled selected>--Select--</option>
										<option  value="E"  >Electronic</option>
										<option  value="P" >Physical</option>
									</select></div>
								<div class="form-group required-field">
									<label style="font-size: 15px; color:black;" class="control-label ">Document Type</label>
									<select  class="form-control" id="opt" name="optt" size="1">
										<option value="" disabled selected>--Select--</option>
										<option></option>
									</select>
<script type="text/javascript">
var c2 = {
E: ["Email","Letter"],
P: ["Opendac","Enveloper"],

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
						
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label">In classified</label>&nbsp;
									<input type="radio" name="yesno" id="yesno" value="Yes" required>&nbsp;Yes
											&nbsp;<input type="radio" name="yesno" id="yesno" value="No">&nbsp;No
									<select class="form-control" size="1"  name="classified">
										<option value="" selected disabled>--Select--</option>
                                        <option>Confidential</option>
                                        <option>Secret</option>
                                        <option>Top Secret</option>
 							 		</select>
				<script>
					$('input[name="yesno"]').on('change',function()
						{
					$('select[name="classified"]').attr('disabled',this.value!="Yes")

						}
					);

				</script>				

								</div>
							</div>	
							<div><br>
							<div>	
								<div class="form-group">
									<label style="color:blue; font-size:20px;" class="control-label">Dairy Details</label>
								</div><br><br>
									<div class="form-group">
										<label style="font-size: 15px; color:black;" class="control-label required-field ">Delivery Mode</label>
										<select  class="form-control" name="mode"  >
											<option value="" disabled selected>--Select--</option>
											<option  value="By Hand"  >By Hand</option>
											<option  value="Post"  >Post</option>
										</select>
									</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label required-field ">Doc Type</label>
									<select  class="form-control"  name="doctype">
										<option value="">--Select--</option>
										<option value="Letter">Letter</option>
									</select>
								</div>
								
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label required-field ">Received Date</label>
									<input class="form-control" type="date" id="ddate" name="rdate"  value= <?php echo date('Y-m-d H:i:s'); ?> required />
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label required-field "> Entry Date</label>
									<input style="font-size: 15px; color:black;" class="form-control " disabled type="date" id="edate" name="edate"  value= <?php echo date('Y-m-d H:i:s'); ?> required />
								</div>	
								
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label required-field ">For Whom</label>
									<select  class="form-control"  name="username"  >
								<?php 
								 echo "<option value=''>--Select--</option>";
										 $query1234 = "SELECT * FROM `dms_users` WHERE username != '".$_SESSION['username']."' ";
													$runQuery1234=mysqli_query($connection,$query1234);
													  while($row1234=mysqli_fetch_array($runQuery1234)){ ?>
								
								<option value="<?php echo $row1234['username'];?>"><?php echo $row1234['username'];?></option><?php
												   }
												?>
									</select>
								</div>
							</div><br><br>
							
							<div>
								<div class="form-group">
									<label style="color:blue; font-size:20px;" class="control-label ">Sender's Details</label>
								</div><br><br>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label ">M/s. Organization / Customer</label>
									<input class="form-control" type="text" name="customer" size="4"  />
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label  ">Department</label>
									<input class="form-control" type="text" name="department" size="10"   />
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label ">Name</label>
									<input class="form-control" type="text" name="name"   />
								</div>
									<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label ">Designation</label>
									<input class="form-control" type="text" name="desig"   />
								</div>
									<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label ">E-Mail</label>
									<input class="form-control" type="text" name="email"   />
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label ">Mobile</label>
									<input class="form-control" type="mobile" name="mobile"    />
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label">State</label>
									<input class="form-control" type="text" name="state"    />
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label ">PIN Code</label>
									<input class="form-control" type="text" name="pin"   />
								</div>
							</div><br>
							<div>
								<div class="form-group">
									<label style="color:blue; font-size:20px;" class="control-label">Category</label>
								</div><br><br>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label ">Main Category</label>
									<input class="form-control" type="text" name="category" size="10"  />
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label">Sub Category</label>
									<input class="form-control" type="text" name="subcategory" size="10"  />
								</div>
								<div class="form-group">
									<label style="font-size: 15px; color:black;" class="control-label ">Subject</label>
									<input class="form-control" type="text" name="subject"    />
								</div>
								
							</div>
						</div>	
							<br><br>							
								
								<div class="text-center">
									<button  class="btn btn-primary" type="submit" name="submit" data-toggle="modal" data-target="#myModal">Submit</button>	
								</div>
								
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
											
											
											<label style="text-align: center; font-size: 17px; font-weight: bold;  color:darkred;"> Your Dairy Id has been generated:</label> <b style="text-align: center; font-size: 17px; font-weight: bold;   color:darkred;" ><?php echo  $dairyid ; ?></b>
											
											</div>
											<div class="modal-footer">
												<button type="submit"  id="submit" value="close" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit"  name="submit" id="submit" class="btn btn-default">Ok</button>
											</div>
										</div>
									</div>
								</div>
		<?php 
 include 'db.php';

if(isset($_POST['submit'])){
	@$dairyid = $_POST['dairyid'];
   @$fileid = $_POST['fileid'];
   @@$documentt = $_POST['documentt'];
   @$optt = $_POST['optt'];
   @$classified = $_POST['classified'];
   @$classified = $_POST['dlvmode'];
  @$doctype = $_POST['doctype'];
  @$rdate = $_POST['rdate'];
  @$edate = $_POST['edate'];
   @$username = $_POST['username'];
  @$customer = $_POST['customer']; 
   @$department = $_POST['department'];
   @$name = $_POST['name'];
   @$desig = $_POST['desig'];
   @$email = $_POST['email'];
   @$mobile = $_POST['mobile'];
   @$state = $_POST['state'];
   @$pin = $_POST['pin'];
   @$category = $_POST['category'];
   @$subcategory = $_POST['subcategory'];
   @$subject = $_POST['subject'];

                  $query="INSERT INTO `receipt_files`(`dairyid`, `file_id`, `documentt`, `optt`, `classified`, `dlvmode`, `doctype`, `rdate`, `edate`, `Forwhom`, `customer`, `dairydepart`, `cus_name`, `design`, `email`, `mobile`, `state`, `pincode`, `maincategory`, `subcategory`, `subject`) VALUES 
				  ('".$dairyid."','".$fileid."', '".$documentt."','".$optt."','".$classified."','".$dlvmode."','".$doctype."','".$rdate."','".$edate."','".$username."','".$customer."','".$department."','".$name."','".$desig."','".$email."','".$mobile."','".$state."','".$pin."','".$category."','".$subcategory."','".$subject."')";
			if ($query == mysqli_query($connection, $query)) {
						//echo "Data Submitted";
						echo "<script>window.location.href='home.php?lvl=5';</script>";
					
      
					}
					else 
					{
					echo "Invalid- Username ID/Password";
      
					}
}

?>						
	
	
					</form>
				</section>
			</div>
		</div>
		</section>