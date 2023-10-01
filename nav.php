
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
 
	<aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
			<ul class="sidebar-menu">

          <!-- Date & Time start-->

            <li class="time">
				<a class="text-center"><h1 class="logo">

					<script>
						  function startTime() {
						  var today = new Date();
						  var h = today.getHours();
						  var m = today.getMinutes();
						  var s = today.getSeconds();
						  m = checkTime(m);
						  s = checkTime(s);
						  document.getElementById('txt').innerHTML =
						  h + ":" + m + ":" + s;
						  var t = setTimeout(startTime, 500);
						}
						function checkTime(i) {
						  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
						  return i;
						}
						</script>
						  <body onload="startTime()"> 
							<div id="txt"></div><?php date_default_timezone_set("Asia/Kolkata");?></h1><br>

							  <?php echo date("l, \ jS  F Y");?>
				</a>
            </li>
                            <!-- Date & Time End-->

            <li class="active">
				<a class="" href="home.php">
                    <i class="fa fa-fw fa-home"></i>
                        <span>Dashboard</span>
                </a>
            </li>			
            <li class="active">
				<a class="" href="home.php?lvl=1">
					<i class="fa fa-search"></i>
						<span >Search Files</span>
                 </a>
            </li>
            <li class="active">
				<a class="" href="home.php?lvl=2">
                    <i class="fa fa-pen-square"></i>
                        <span>Create a New File</span>
                </a>
            </li>
            <li class="active">
				<a class="" href="home.php?lvl=3">
                    <i class="fa fa-plus-square"></i>
                        <span>Add Documents</span>
                </a>
            </li>
            <li class="active">
				<a class="" href="home.php?lvl=4">
                    <i class="fas fa-cloud-download-alt"></i>
                        <span>Incoming DAAK</span>
                </a>
            </li>			
      
            <li class="active">
				<a class="" href="home.php?lvl=5"> 
                    <i class="fa fa-registered"></i>
                        <span>DAAK Register</span>
				</a>                            
            </li>
            <li class="active">
				<a class="" href="home.php?lvl=7">
                    <i class="fas fa-route"></i>
                        <span>Track File</span>
                </a>
            </li>
            <li class="sub-menu">
				<a href="javascript:;" class="">
                    <i class="fa fa-fw fa-user"></i>
                        <span>Admin-Users</span>
						<span class="menu-arrow arrow_carrot-right"></span>
				</a>
							<ul class="sub">
								<li><a class="" href="home.php?lvl=8">Create User List</a></li>
								<li><a class="" href="home.php?lvl=9">Assign Roles</a></li>
								<li><a class="" href="">De-activate User</a></li>
							</ul>                       
            </li>
         
    </aside>
   