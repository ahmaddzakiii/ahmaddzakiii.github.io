$(document).ready(function() {
	$('#keyword').on('keyup', function () {
		$('#table').load('ajax/tasks.php?keyword=' + $('#keyword').val());
	});
});


