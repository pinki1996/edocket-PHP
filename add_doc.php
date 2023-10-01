<?php
include 'header.php';
include 'nav.php';
error_reporting(0);
$lvl = '0';
$f_id = (int)$_GET['fid'];
$pn = (int)$_GET['pn'];	
$f_no = $_GET['fno'];
$doc_id = $_GET['doc_id'];
$id = $_GET['id'];
$docno = $_GET['docno'];
$username = $_SESSION['username'];


?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<style>


.modal {
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
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
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
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}
.modal-content2 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
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
 #ht {
    max-height: 50px;
    display: inline-block;
    width: 100%;
    overflow: auto;
	}
	#ac {
    max-height: 70px;
    display: inline-block;
    width: 400px;
    overflow: auto;
	}
	#ab {
    height: 80%;
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
</style>



<!DOCTYPE html>
<html lang="en">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="css/bootstrap-select.css">
<script src="js/select.js"></script>
   
   <!--main content start -->
    <section id="main-content"> 
     <div style= "height: 100%; overflow-y: scroll;">
		<section class="wrapper">
			<?php include 'daak_bar.php'; 
			
			?><br>
					<a style="color: red; font-size:20px;">Entry Form :- <span style="color: blue; text-align: left; font-size:20px;">Add Documents<span></a><br><br>
				<section class="panel panel-body">  
					<form class="form-inline "  style="float:center;" method="POST" enctype="multipart/form-data"><br>
						<div class="form-group">
							<label style="font-size: 15px; color:black;">Document No.</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="docno" name="docno" value="" size="10"  required />
						</div>
						<div class="form-group">
							<label style="font-size: 15px; color:black;" for="">Document Type</label>
							<select style="font-size: 15px; color:black;" class="form-control"  name="doctype"   >
							<option value="">--SELECT--</option>
							<option value="note">Noting</option>
							<option value="docs">Folio</option>
							</select>
						</div>
						<input type="hidden"  name="file_id" value="<?php echo $_GET['fid'];?>"   />
						<div class="form-group">
							<label style="font-size: 15px; color:black;">Document Subject</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="text" id="docsubject" name="docsubject" value="" size="10"  required />
						</div>
						<div class="form-group">
							<label style="font-size: 15px; color:black;" for="">Created By</label>
							<select style="font-size: 15px; color:black;" class="form-control"  name="username"  >
								<?php 
								 echo "<option value=''>--SELECT--</option>";
										 $query1234 = "SELECT * FROM `dms_users` WHERE username != '".$_SESSION['username']."' ";
													$runQuery1234=mysqli_query($connection,$query1234);
													  while($row1234=mysqli_fetch_array($runQuery1234)){ ?>
								
								<option value="<?php echo $row1234['username'];?>"><?php echo $row1234['username'];?></option><?php
												   }
												?>
							</select>
						</div>
						<div class="form-group">
							<label style="font-size: 15px; color:black;">Document Department</label>
							<input style="font-size: 15px; color:black;" class="form-control" list="type" id="department" name="department" value="" size="3"  required />
						</div>
						<div class="form-group">
							<label style="font-size: 15px; color:black;">Created On:</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="date" id="createdon" name="createdon"  value= <?php echo date('Y-m-d H:i:s'); ?> required />
						</div>
						<div class="form-group">
							<label style="font-size: 15px; color:black;" for="">Received From</label>
							<select style="font-size: 15px; color:black;" class="form-control"  name="username"  >
								<?php 
								 echo "<option value=''>--SELECT--</option>";
										 $query1234 = "SELECT * FROM `dms_users` WHERE username != '".$_SESSION['username']."' ";
													$runQuery1234=mysqli_query($connection,$query1234);
													  while($row1234=mysqli_fetch_array($runQuery1234)){ ?>
								
								<option value="<?php echo $row1234['username'];?>"><?php echo $row1234['username'];?></option><?php
												   }
												?>
							</select>
						</div>
							<input style="font-size: 15px; color:black;" class="form-control" type="hidden" id="noofpages" name="noofpages"  value= "<?php echo $_GET['pn'];?>" required />
						
						<div class="form-group">
							<label style="font-size: 15px; color:black;">Select File</label>
							<input style="font-size: 15px; color:black;" class="form-control" type="file" id="linkedfile" name="linkedfile"  value= ""   required />
						</div>
						<div class="form-group">
						<label style="font-size: 15px; color:black;"  >User Viewer</label><br>
							<select class="selectpicker" id="myMulti" style="font-size: 15px; color:black;"  name="view[]" multiple="true" data-live-search="true"  >
								<?php 
								
										 $query1234 = "SELECT * FROM `dms_users` WHERE username != '".$_SESSION['username']."' ";
													$runQuery1234=mysqli_query($connection,$query1234);
													  while($row1234=mysqli_fetch_array($runQuery1234)){ ?>
								
								<option value="<?php echo $row1234['username'];?>"><?php echo $row1234['username'];?></option><?php
												   }
												?>
							</select>
						</div>
						<br><br>
						<div class="text-center">
							<button  class="btn btn-primary" value="Add" name="submit" id="submit">Submit</button>	
						</div>
					</form>
			<?php
					if(isset($_POST['submit']))
					{
					$doc_id =$_POST["doc_id"];
					$doctype =$_POST["doctype"];
					$file_id =$_POST["file_id"];
					$docsubject =$_POST["docsubject"];
					//$receviedon =$_POST["receviedon"];
					$docno =$_POST["docno"];
					$noofpages =$_POST["noofpages"];
					$username =$_POST["username"];
					$checkbox =implode(',',$_POST["view"]);
					$department =$_POST["department"];
					$docstatus =$_POST["docstatus"];
					$linkedpath =$department."/";

					$linkedfile =$_FILES["linkedfile"]["name"];
					$tempname = $_FILES["linkedfile"]["tmp_name"];   
					$folder = $department;
					# create directory if not exists in upload/ directory
					if(!is_dir($folder)){
					mkdir($folder, 0755);
					}
					$folder .= "/".$linkedfile;
					
					$query="INSERT INTO `dms_docs` (`docno`,`doctype`,`file_id`,`docsubject`,`doccreator`,`docdepartment`,`docviewuser`,`createdon`,`receviedfrom`,`docstatus`,`noofpages`,`linkedpath`,`linkedfile`) VALUES ('".$docno."','".$doctype."','".$file_id."','".$docsubject."','".$username."','".$department."','".$checkbox."',NOW(),'".$username."','".$docstatus."','".$noofpages."','".$linkedpath."','".$linkedfile."')";
					$runQuery = mysqli_query($connection,$query); 
					
					
					if (move_uploaded_file($tempname, $folder))  {
				}
        // echo $query;
           echo "<script>window.location.href='home.php?lvl=3';</script>";
				}
  
  ?>
      
				</section>
		</section>			
	</div>
	</section>
</body>
</html>

<script>

$(document).ready(function(){
	$(".selectpicker").select({
		placeholder:"--SELECT--",//placeholder
		tags:true,
		tokenSeparators:['/',',',',',',""]
	});
})




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
</script>
<script>
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
</script>
<script>
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
</script>
<script>
         
			
			
			function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("gfg");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbldocs");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                var x = $("#gfg").val();
                var regex = /^[a-zA-Z]+$/;
                if (!x.match(regex)) {
                    td = tr[i].getElementsByTagName("td")[0];
                }
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

			
			function myFunction1() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("gfg1");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbldocs1");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                var x = $("#gfg1").val();
                var regex = /^[a-zA-Z]+$/;
                if (!x.match(regex)) {
                    td = tr[i].getElementsByTagName("td")[0];
                }
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
			
			
</script>

 <script>
      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.getAttribute('data-modal');
          document.getElementById(modal)
            .style.display = "block";
        }
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.closest('.modal');
          modal.style.display = "none";
        }
      });
      window.onclick = function(event) {
        if(event.target.className === "modal") {
          event.target.style.display = "none";
        }
      }
    </script>

<script>		
function toggleText() {

    var table = document.getElementById("tbldocs");
    var thead = table.getElementsByTagName("thead")[0];
    var tbody = table.getElementsByTagName("tbody")[0];
    var ishigh;
    tbody.onclick = function (e) {
        e = e || window.event;
        var td = e.target || e.srcElement
        var row = td.parentNode;
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
       var  pdfpath = row.cells[16].innerHTML;
       var  pdfname = row.cells[17].innerHTML;
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
        el('doctype').value = row.cells[1].innerHTML;
        el('docsubject').value = row.cells[5].innerHTML;
        el('doccreator').value = row.cells[6].innerHTML;
        el('createdon').value = row.cells[8].innerHTML;
        el('receviedon').value = row.cells[9].innerHTML;
        el('receviedfrom').value = row.cells[10].innerHTML;
        el('docrefno').value = row.cells[4].innerHTML;
     }



} //end of nested function
</script>
<script>		
function toggleText1() {

    var table = document.getElementById("tbldocs1");
    var thead = table.getElementsByTagName("thead")[0];
    var tbody = table.getElementsByTagName("tbody")[0];
    var ishigh;
    tbody.onclick = function (e) {
        e = e || window.event;
        var td = e.target || e.srcElement
        var row = td.parentNode;
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
       var  pdfpath = row.cells[16].innerHTML;
       var  pdfname = row.cells[17].innerHTML;
	   var embedUrl = pdfpath+pdfname;	
	   var embed = document.getElementById("pdfv1");
       embed.setAttribute('src', embedUrl);
       embed.setAttribute('type', 'application/pdf');
       embed.setAttribute('frameborder', "2");
       embed.setAttribute('scrolling', "auto");
       embed.setAttribute('height', "80%");
       embed.setAttribute('width', "100%");
		 
     }

    function populateFields(row) {
        el('doctype').value = row.cells[1].innerHTML;
        el('docsubject').value = row.cells[5].innerHTML;
        el('doccreator').value = row.cells[6].innerHTML;
        el('createdon').value = row.cells[8].innerHTML;
        el('receviedon').value = row.cells[9].innerHTML;
        el('receviedfrom').value = row.cells[10].innerHTML;
        el('docrefno').value = row.cells[4].innerHTML;
     }



} //end of nested function
</script>

