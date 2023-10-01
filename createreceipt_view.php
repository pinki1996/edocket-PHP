
											  	
<?php 
 include 'db.php';

if(isset($_POST['submit'])){
	@$dairyid = $_POST['dairyid'];
   @$fileid = $_POST['fileid'];
    @$edate = $_POST['edate'];
   @@$documentt = $_POST['documentt'];
   @$optt = $_POST['optt'];
   @$classified = $_POST['classified'];
  @$doctype = $_POST['doctype'];
   @$ldate = $_POST['ldate'];
  @$ddate = $_POST['ddate'];
  @$dadate = $_POST['dadate'];
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

                  $query="INSERT INTO `receipt_files`(`dairyid`, `file_id`, `edate`, `documentt`, `optt`, `classified`, `dlvmode`, `doctype`, `ldate`, `rdate`, `ddate`, `dealhand`, `customer`, `dairydepart`, `cus_name`, `design`, `email`, `mobile`, `state`, `pincode`, `maincategory`, `subcategory`, `subject`) VALUES VALUES 
				  ('".$dairyid."','".$fileid."','".$edate."', '".$documentt."','".$optt."','".$classified."','".$doctype."','".$ldate."','".$ddate."','".$dadate."','".$username."','".$customer."','".$department."','".$name."','".$desig."','".$email."','".$mobile."','".$state."','".$pin."','".$category."','".$subcategory."','".$subject."')";
			if ($query == mysqli_query($connection, $query)) {
						//echo "Data Submitted";
						echo "<script>window.location.href='home.php?lvl=5';</script>";
					
      
					}
					else 
					{
					echo "Invalid- Username ID/Password";
      
					}

?>
