<?php 

require 'functions.php';

$id_tasks = $_GET["id_tasks"];

if ( cancelled($id_tasks) > 0) {
	echo "
	<script>
	alert('Task cancelled successfully');
	document.location.href = 'index.php';
	</script>";
} else {
	echo "
	<script>
	alert('Task failed to cancel');
	document.location.href = 'index.php';
	</script>";
}

?>