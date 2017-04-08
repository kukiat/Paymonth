<?php
	require ('connect.php');
	$query = "SELECT * FROM statement ORDER BY id ASC;";
	$result = mysqli_query($connect, $query) or die('profile.php-die');

	$query2 = "SELECT * FROM statement ORDER BY id ASC;";
	$result2 = mysqli_query($connect, $query2) or die('profile.php-die');
	$success = 0;
	while($roww = mysqli_fetch_array($result2)){
		$success+=$roww["price"];
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css.css">

	<script type="text/javascript" scr="js.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-fixed-top navbar-inverse">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle php</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.php">Paymonth</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
			<li><a href="profile.php">Home</a></li>
			<li><a href="Dashboard.php">Dashboard</a></li>
		  </ul>

		  <ul class="nav navbar-nav navbar-right">

			<li><a href="regis.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

		<li class="dropdown login">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				<ul class="dropdown-menu form-login">
					<form class="board_login">
						<div class="from-group alert-message"></div>
						<div class="form-group">
							<label for="b_username"><i class="fa fa-lock" aria-hidden="true"></i>Username:</label>
							<input type="text" class="form-control" id="b_username" name="b_username" required>
						</div>
						<div class="form-group">
							<label for="b_password"><i class="fa fa-key" aria-hidden="true"></i>Password:</label>
							<input type="password" class="form-control" id="b_password" name="b_password" minlength="6" maxlength="10" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block" id="b_login" name="b_login"><i class="fa fa-check" aria-hidden="true"></i>Submit</button>
						</div>
						<input type="hidden" name="memProcess" value="login">
					</form>
				 </ul>

		</li>
	  </ul>
		</div><!-- /.nav-collapse -->
	  </div><!-- /.container -->
	</nav><!-- /.navbar -->
<div class="mainbody container">
    <div class="row">

        <div style="padding-top:70px;">&nbsp;</div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h3><strong>ประวัติ</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                            <hr>
                            <h3><strong>Location</strong></h3>
                            <p>Earth</p>
                            <hr>
                            <h3><strong>Gender</strong></h3>
                            <p>Unknown</p>
                            <hr>
                            <h3><strong>รายจ่ายเดือนนี้</strong></h3>
                            <p><h1><center><?php echo $success; ?> บาท</h1></center></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;width:100%;">นายสมใจ ใช้ดี๊ดี <small>somjai_naja@gmail.com</small>
                        	<br>
                        	<br>
										<div class="progress" style="height:50px;width:100%;">
								  <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%;">
								    Balance
								  </div>
									<div class="progress-bar progress-bar-danger" role="progressbar" style="width:60%">
								    Spended
								  </div>
								</div>
							</span>
							</div>
            </div>
            <hr>
            <!-- Expense Panel -->
            <div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Expense Transaction</div>

					  <table class="table table-hover">
					    <thead>
					      <tr>
					        <th>No.</th>
					       	<th>Time</th>
									<th>Name</th>
					        <th>Price</th>
					      </tr>
					    </thead>
					    <tbody>
								<?php
										while($row = mysqli_fetch_array($result)){

								 ?>
									 <tr>
	 					        <td><?php echo $row["id"]; ?></td>
	 					        <td><?php echo $row["time"]; ?></td>
	 					        <td><?php echo $row["name"]; ?></td>
	 					        <td><?php echo $row["price"]; ?></td>
	 					      </tr>
								 <?php
							 			}
								  ?>


					    </tbody>
					  </table>
			</div>



			 <!-- Income Panel -->
            <div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Income Transaction</div>

					  <table class="table table-hover">
					    <thead>
					      <tr>
					        <th>No.</th>
					        <th>Date</th>
					        <th>Time</th>
					        <th>Particular</th>
					        <th>Price</th>
					        <th>Amount</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1.</td>
					        <td>30-03-2017</td>
					        <td>10.30</td>
					        <td>Salary</td>
					        <td>+8000.00</td>
					        <td>8000</td>
					      </tr>
								<tr>
					        <td>2</td>
					        <td>30-03-2017</td>
					        <td>15.30</td>
					        <td>Salary</td>
					        <td>+8000.00</td>
					        <td>8000</td>
					      </tr>
								<tr>
					        <td>3</td>
					        <td>30-03-2017</td>
					        <td>13.30</td>
					        <td>Salary</td>
					        <td>+8000.00</td>
					        <td>8000</td>
					      </tr>
								<tr>
					        <td>4</td>
					        <td>30-03-2017</td>
					        <td>15.30</td>
					        <td>Salary</td>
					        <td>+8000.00</td>
					        <td>8000</td>
					      </tr>
					    </tbody>
					  </table>
			</div>




        </div>
    </div>
</div>




</body>

</html>
