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

.progressbar li{
  float: left;
  width: 20%;
  position: relative;
  text-align: center;
}
.progressbar{
  counter-reset: step;
}
.progressbar li:before{
  content:counter(step);
  counter-increment: step;
  width: 30px;
  height: 30px;
  border: 2px solid #bebebe;
  display: block;
  margin: 0 auto 10px auto;
  border-radius: 50%;
  line-height: 27px;
  background: white;
  color: #bebebe;
  text-align: center;
  font-weight: bold;
}
.progressbar li:first-child:after{
content: none;
}
.progressbar li:after{
  content: '';
  position: absolute;
  width:100%;
  height: 3px;
  background: #979797;
  top: 15px;
  left: -50%;
  z-index: -1;
}
.progressbar li.active + li:after{
 background: #3aac5d;
}
.progressbar li.active + li:before{
border-color: #3aac5d;
background: #3aac5d;
color: white
}
</style>

<html>
    <head>
		<section id="main-content">
			<div style="height:100%; width:100%; overflow: scroll;"> 	
				<section class="wrapper">
      
        <?php
			include 'daak_bar.php';
        ?>
    </head>
	
					<body>
						<div class="container">
							<ul class="progressbar">
								<li class="active">File Creation</li>
								<li class="active">Add Documents</li>
								<li>Admin</li>
								<li>Noor</li>
								<li>Tripti</li>
							</ul>
						</div>  
					</body>
				</section>
			</div>
		</section>
	
<?php include 'footer.php'; ?>  
</html>