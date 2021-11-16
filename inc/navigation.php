	<!-- Navigation -->
  <script src="https://kit.fontawesome.com/bbb8a829b5.js" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #0ABAB5">
      <div class="container">
        <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Sales Reporting System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item">
				<form class="form-inline" action="/action_page.php">
					<input class="form-control col-md-8 mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-success" type="submit">Search</button>
				</form>
			</li> --> 
      <?php 
        // include("dbcon.php");

        // $quantity = "10";
        // $select_sql1 = "SELECT * FROM stock where remain_quantity <= '$quantity' and status='Available'";
        // $result1 = mysqli_query($con,$select_sql1);
        $row2 = 0;

      //  if($row2 == 0){

      //     <a href="#" class="notification label-inverse" >
      //         <span class="icon-exclamation-sign icon-large"></span></a>

      //   }else{
      //     echo ' <a  href="qty_alert.php" class="notification label-inverse" id="popup">
      //         <span class="icon-exclamation-sign icon-large"></span>
      //         <span class="badge">'.$row2.'</span></a>';

  
      //   }
        ?> 
        <li class="nav-item">
          <a href="model/notification/qty_alert.php" class="notification" id="popup">
          <span class="bell icon-exclamation-sign far fa-bell "></span>
              <span class="noti"><?php echo $row2; ?></span></a>
              </li>
			<li class="nav-item">
				<span class="nav-link">Welcome, <?php echo $_SESSION['fullName']; ?></span>
            </li>
			<li class="nav-item">
				<span class="nav-link"> | </span>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="model/login/logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>