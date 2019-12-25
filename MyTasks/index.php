<?php 

require 'functions.php';
$mytasks = query("SELECT * FROM tasks");

if ( isset($_POST["buttonsearch"])) {
	$mytasks = search($_POST["keyword"]);
};

?>
<!DOCTYPE html>
<html>
<head>
	<title>To-Do App.</title>
	<link rel="stylesheet" type="text/css" href="dependencies/bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dependencies/fontawesome5/css/all.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">	
	<script type="text/javascript" src="dependencies/jquery3/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>

<body>

	<div class="container">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg bg-custom fixed-top">
			<h3 class="judul"><i>My Tasks App.</i>&nbsp;</h3>
			<a class="judul" href="">&nbsp;Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#search">
				<span><i class="far fa-caret-square-down"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="search">
				<ul class="navbar-nav mr-auto"></ul>
				<form class="form-inline my-2 my-lg-0" action="" method="post">
					<input type="text" class="form-control mr-sm-2" placeholder="Search" name="keyword" id="keyword" autocomplete="off" autofocus>
				</form>
			</div>
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
					<div class="judulmain">
						<div class="row justify-content-start">
							<div class="col-10"><h4>My Tasks</h4></div>
							<div class="col-2">
								<a class="btn btn-success btn-sm" href="addtaskpage.php" role="button"><i class="fas fa-plus-square"></i>&nbsp;Add Task</a>
							</div>
						</div>					
					</div>

					<!-- Main -->
					<div class="main">
						<table class="table table-striped table-hover table-dark table-sm table-bordered" id="table">
							<thead class="thead text-center">
								<tr>
									<th scope="col">No</th>
									<th scope="col">Title</th>
									<th scope="col">Description</th>
									<th scope="col">Last update</th>
									<th scope="col">Status</th>
									<th scope="col">Option</th>
								</tr>
							</thead>
							<tbody class="isitabel text-center">
								<?php $no = 1; ?>
								<?php foreach ($mytasks as $row ) : ?>
									<tr>
										<th scope="row"><?php echo $no ?></th>
										<td scope="row"><?php echo $row["title"]; ?></td>
										<td scope="row"><?php echo $row["description"] ?></td>
										<td scope="row"><?php echo $row["updated"] ?></td>
										<td scope="row"><?php echo $row["status"] ?></td>
										<td scope="row">
											<div class="btn-group btn-group-toggle btn-sm" data-toggle="buttons">
												<a class="btn btn-success btn-sm" href="updatetaskpage.php?id_tasks=<?php echo $row['id_tasks']; ?>" role="button">
													<i class="fas fa-edit"></i>
													<small>Edit</small>
												</a>
												<a class="btn btn-success btn-sm" href="cancelled.php?id_tasks=<?php echo $row['id_tasks']; ?>" role="button" onclick="return confirm('Are you sure to cancel this task ?');">
													<i class="fas fa-times">
													</i><small>Cancel</small>
												</a>
											</div>
										</td>
									</tr>
									<?php $no++; ?>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- End of main -->
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
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>