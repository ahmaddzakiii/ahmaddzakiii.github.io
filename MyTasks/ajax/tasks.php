<?php 

require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM tasks WHERE title LIKE '%$keyword%' OR description LIKE '%$keyword%' OR updated LIKE '%$keyword%' OR status LIKE '%$keyword%'";
$mytasks = query($query);

?>

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