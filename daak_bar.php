
<div class="row text-center">
    <div class="col-lg-12">
	<style>

    .topnav {  

        overflow: hidden;

        background-color:white ;

        padding: 2px 5px; 

        text-align: center;

        }
	.topnav span{
		padding-left: 10px;

       color: blue; 

       font-size: 20px;

       float:left;

       text-align: center;

       padding: 6px 4px;

        }
    .topnav a{
       padding-left: 10px;

       color: blue; 

       font-size: 20px;

       float:left;

       text-align: center;

       padding: 6px 4px;

        }


	
</style>
        <ol class="topnav" name="show">
			
            <center><a data-toggle="dropdown" class="dropdown-toggle" >
			<?php 
			
			if ($lvl== '0') { 
				$tbhead ="SELECT * FROM `dms_files` WHERE file_id = '".$f_id."'";
				$tbhead = mysqli_query($connection,$tbhead);
				$row=mysqli_fetch_array($tbhead);
				$f_no = $row['fileno']; 
				$dept=$row['department'];
				$nopages = $row['noofpages'];
				 ?>
				
				<span class="username"><b style="color:red;">VIEWING FILE NO :-</b>  <?php echo $f_no ;?> - - - -</span> 
				<span class="username"><b style="color:red;">Department :-  </b><?php echo $dept ;?> - -  - -</span> 
				<span class="username"><b style="color:red;">No. of Pages :-</b>  <?php echo $nopages ;?></span> 
				 <?php }
			
			
			if ($lvl== 1) { 
				$tbhead ="SELECT * FROM `dms_files` WHERE file_id = '".$f_id."'";
				$tbhead = mysqli_query($connection,$tbhead);
				$row=mysqli_fetch_array($tbhead);
				$f_no = $row['fileno']; 
				$dept=$row['department'];
				$nopages = $row['noofpages'];
				 ?>
				
				<span class="username"><b style="color:red;">VIEWING FILE NO :-</b>  <?php echo $f_no ;?> - - - -</span> 
				<span class="username"><b style="color:red;">Department :-  </b><?php echo $dept ;?></span> 
				<?php }
			?>
				
            </center></a>
           
			
            </ol>
          </div>
        </div>
