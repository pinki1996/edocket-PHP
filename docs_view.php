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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet/v0.7.7/leaflet.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  padding: 10px;
  border: 1px solid #888;
  width: 20%;
}
.modal-content2 {
  background-color: #fefefe;
  margin: auto;
  padding: 10px;
  border: 1px solid #888;
  width: 30%;
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
  width: 15%;
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



<html>
    <head>
	<section id="main-content">
	<div style="height:100%; width:100%; overflow: scroll;"> 	
    <section class="wrapper">
        <link href="style.css" type="text/css" rel="stylesheet">
        <?php
            include("db.php");
			include 'daak_bar.php'; 
            $rowperpage = 1;
            $row = 0;

        ?>
    </head>
    <body>


    <div id="content">
        	<?php
											$tablequery1 ="SELECT docno,doctype,linkedpath,linkedfile,file_id,doc_id FROM `dms_docs` WHERE `file_id`='".$_GET['fid']."' ORDER BY `doctype` DESC ";
											$tableQuery1 = mysqli_query($connection,$tablequery1);
											$kount = 0;
											while($row1=mysqli_fetch_array($tableQuery1)){ 	
												if ($kount == 0) {
													$lnkpath=$row1['linkedpath'];
													$lnkfile=$row1['linkedfile']; 
													$docno=$row1['docno'];
													$doctyp=$row1['doctype'];?>
                <tr>
		<div>
			<h3 id="ptext" style="color: black; word-spacing: 10px;  font-weight: bold; text-align: left; text-decoration:underline;text-decoration-color:#03C04A; text-decoration-thickness: 3px;">NOTING  <span style="color: black; word-spacing: 10px; font-weight: bold; text-align: left; text-decoration:underline;text-decoration-color:#03C04A;text-decoration-thickness: 3px;"><?php echo $docno; ?><span></h3><br>
        </div>
		<div class="row">
					<div class="col-xs-1">
						<div class="btn-group-vertical" >
							<button id="notetab" class="btn btn-primary tablinks" type="button" style="background-color:#C6F6BE; font-size:20px; color:black;" onclick="openTab('Noting_tab')">Noting</button>
							<button id="foliotab" class="btn btn-primary tablinks" style="background-color:#1E90FF; font-size:20px; color:black; " onclick="openTab('Folio_tab')" type="button">Folio</button>
							
							<div style="width: 90px; overflow: auto;"  id="Noting_tab" class="tabcontent">
								<input   id="gfg" onkeyup='toggleText()' placeholder="Search" title="Type in a name" style="width:100%; height: 35px; font-size:10px; margin-bottom:0px;" />
								
								<form  method="post" action="" >
									<div id="div_pagination">
										<button type="button" class="button"  onclick="toggleText('prev')"> << </button>
										<button type="button" class="button"  onclick="toggleText('next')"> >> </button>
									</div>
								</form>
								<form >
									<table style="display:;"  class="table table-bordered table-striped mb-none"  id="tbldocs">
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
													$kount++;
													}													
												 ?>
												<tr style="font-size:9px;color:black;width:auto;" onclick ='toggleText()'>	
													<td ><?php echo $row1['docno'];  ?></td> 
													<td style="display:"><?php echo $row1['doctype'];  ?></td>
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
                    <div class="col-lg-10 " id="pdfd" >
				<embed id="pdfv"
							  src="<?php echo $lnkpath;?><?php echo $lnkfile; ?>"
							  type="application/pdf"
							  frameBorder="2"
							  scrolling="auto"
							  height="100%"
							  width="100%">
						</embed></div>
    </div>


    </body>
	<script type="text/javascript">

 function openTab(TabName) {
	 
      var table = document.getElementById('tbldocs');
	  if (TabName == 'Noting_tab') 
		{  filter = 'note';
			ptxt = 'NOTING' ;} 
		else { if (TabName == 'Folio_tab') {
			filter = 'docs';
		ptxt = 'FOLIO'; } }
			
      if (filter != "") {
        tr = table.getElementsByTagName("tr");
		txtValue = " ";
        for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				txtType  = table.rows[i].cells[1].innerHTML;
				if (txtType==filter) {
					txtValue = td.textContent || td.innerText;
					tr[i].style.display = "";
					$cur_row = i;
				} else {
					tr[i].style.display = "none";
				}
			}
        }
	  }
		
		var  pdfpath = table.rows[$cur_row].cells[2].innerHTML;
		var  pdfname = table.rows[$cur_row].cells[3].innerHTML;
		var embedUrl = pdfpath+pdfname;
		var embed = document.getElementById("pdfv");
		embed.setAttribute('src', embedUrl);
		var pstyle   = "color: black; word-spacing: 10px; font-weight: bold; text-align: left; text-decoration:underline; text-decoration-color:#03C04A;text-decoration-thickness: 3px;";
		var phead = document.getElementById("ptext");
		phead.setAttribute('style', pstyle);
		phead.innerHTML = ptxt+' ' +txtValue;


        
  }

function toggleText(tblvar) {
      var input, filter, table, tr, td, i,currow,tvar;
      var tbvar = 'tbldocs';
      var table = document.getElementById(tbvar);
      var xhead = document.getElementById("ptext").innerHTML;
	  var phead = xhead.substr(0,5);
	  if (phead == 'NOTIN') 
	  { phead = 'note'; 
        docnm = xhead.substr(7,xhead.length-7);
		} 
	  else 
	  { phead = 'docs';
        docnm = xhead.substr(6,xhead.length-6);
		}
      var txtvar = 'gfg'; 
      input = document.getElementById(txtvar);
	  filter = input.value.toUpperCase();
	  if (tblvar == 'prev' || tblvar == 'next' ) {filter=docnm;}
      if (filter != "") {
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
		  txtType  = table.rows[i].cells[1].innerHTML;
		  
          if ((txtValue.toUpperCase().indexOf(filter) > -1) && (txtType==phead)) {
			  if (tblvar != 'prev' && tblvar != 'next') { tr[i].style.display = ""; }
          currow = i;
          } else { if (tblvar != 'prev' && tblvar != 'next') { tr[i].style.display = "none";}
          }
        }
        }
		if (tblvar == 'prev') { 
			if (tblvar == 'prev' ) { 

			let i = currow-1;
			if (currow >= 0 ) { 
				for (; i >= 0; i--) {
					td = tr[i].getElementsByTagName("td")[0];
					if (td) {
						txtType  = table.rows[i].cells[1].innerHTML;
						if (txtType==phead) {
							currow = i;
							break;
						} 
					}
					
				}
			}
			} 
			var row = table.rows[currow];
			if(currow==null){
				alert("Record Does Not Exist");
			}else{
			populatepdf(row);
			populateFields(row);
			}
			

		}
			else  { 
			if (tblvar == 'next' ) { 

		let i = currow+1;
			if (currow <= tr.length ) { 
				for (; i <= tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[0];
					if (td) {
						txtType  = table.rows[i].cells[1].innerHTML;
						if (txtType==phead) {
							currow = i;
							break;
						} 
					}
					
				}


			}
			} 
			var row = table.rows[currow];
			if(currow==null){
				alert("Record Does Not Exist");
			}else{
			populatepdf(row);
			populateFields(row);
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
        }
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
        if (code === 38) { //up arrow
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
      ptxt = 'NOTING :-';
    } else { ptxt = 'FOLIO' ;}

	
    ptxt = ptxt+" "+row.cells[0].innerHTML;
    phead.innerHTML = ptxt;
        //embed.innerHTML=embedUrl;
     }

      

} //end of nested function

</script>
<?php include 'footer.php'; ?>  
</html>