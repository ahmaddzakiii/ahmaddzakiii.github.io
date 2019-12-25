<?php 
require 'functions.php';

if ( isset($_POST["submit"])) {
	if ( addtask($_POST) > 0 ) {
		echo " 
		<script>
		alert('Task added successfully');
		document.location.href = 'index.php';
		</script>";
	} else {
		echo "
		<script>
		alert('Task failed to add');
		document.location.href = 'addtaskpage.php';
		</script>";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>To-Do App.</title>
	<link rel="stylesheet" type="text/css" href="dependencies/bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dependencies/fontawesome5/css/all.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">	
</head>

<body>

	<div class="container">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg bg-custom fixed-top">
			<h3 class="judul"><i>My Tasks App.</i>&nbsp;</h3>
			<a class="judul" href="index.php">&nbsp;Home</a>
		</nav>

		<!-- Content -->
		<div class="content cf container">

			<div class="row justify-content-center">
				<!-- Sidebar -->
				<div class="sidebar col-md-3">
					<!-- User -->
					<div class="user cf">
						<img src="images/avatar1.png">
						<p></span>Hi, Admin.</p>
					</div>
					<nav class="nav flex-column nav-tabs">
						<li class="nav-item dropdown">
							<a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button"><i class="fas fa-tasks"></i>&nbsp;Tasks&nbsp;</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="addtaskpage.php"><i class="fas fa-plus-square"></i>&nbsp;Add Task</a>
							</div>
						</li>
					</nav>
				</div>

				<!-- Main wrapper -->
				<div class="mainwrapper col-md-9">
					<div class="formaddtask">
						<div class="row">
							<div class="col-8"><h4>Add Tasks</h4></div>
						</div>					
					</div>
					<form class="formaddtask" action="" method="post">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" class="form-control" id="title" name="title" required="" autofocus autocomplete="off">
						</div>
						<div class="form-group">
							<label for="description">Description</label>
							<textarea class="form-control" id="description" name="description" required=""></textarea>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						<a class="btn btn-danger" href="index.php" role="button">Cancel</a>
						<button type="Clear" class="btn btn-warning">Clear</button>
					</form>
				</div>
			</div>
		</div> 
		<!-- End of content -->
		<!-- footer -->
		<footer class="text-center fixed-bottom">
			<p>@ Copyright 2019 | Design by Ahmad Dzaki Aulia. Visit my profile : <a class="link" href="http://projekbiodatasaya.epizy.com/" target='blank'>Click me</a></p>
		</footer>
	</div>
	<!-- End of container -->

	<script type="text/javascript" src="dependencies/jquery3/jquery-3.4.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>