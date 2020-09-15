<?php
if (isset($_GET['delete_todo'])) {
	$delete_td = $_GET['delete_todo'];

	$sqli = "DELETE FROM todo WHERE todo_id = $delete_td";
	$res = mysqli_query($connection,$sqli);

	if (!$res) {
        die("Failed");
    }else{
        header("Location:index.php?todo-deleted");
    }
}
?>