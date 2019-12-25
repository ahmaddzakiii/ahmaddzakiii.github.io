<?php 

$conn = mysqli_connect("localhost", "root", "", "dbmytasks");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function addtask($task) {
	global $conn;
	$title = $task["title"];
	$description = $task["description"];

	$query = "INSERT INTO tasks VALUES ('', '$title', '$description', NOW(), 'Queued')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cancelled($id_tasks) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tasks WHERE id_tasks = $id_tasks");
	return mysqli_affected_rows($conn);
}

function updatetask($task) {
	global $conn;
	$id_tasks = $task["id_tasks"];
	$title = $task["title"];
	$description = $task["description"];
	$status = $task["status"];

	$query = "UPDATE tasks SET 
	title = '$title', description = '$description', updated = NOW(), status = '$status' WHERE id_tasks = $id_tasks";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function search($keyword) {
	$query = "SELECT * FROM tasks WHERE title LIKE '%$keyword%' OR 
	description LIKE '%$keyword%' OR
	updated LIKE '%$keyword%' OR
	status LIKE '%$keyword%'
	";
	return query($query);
}
?>