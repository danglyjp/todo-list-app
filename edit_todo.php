<?php
include "db_connect.php";

if (isset($_GET['edit-todo'])) {
	$edit_id = $_GET['edit-todo'];
}
if (isset($_POST['edittodo-btn'])) {
	$edit_todo = $_POST['txtTodo'];

  $query = "UPDATE todo SET todo_name = '$edit_todo' WHERE todo_id = $edit_id ";
  $run = mysqli_query($connection,$query);

  if (!$run) {
        die("Failed");
    }else{
        header("Location:index.php?updated");
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT TODO List App with PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <div id="container">

        <div class="todo-header">
            <h1 class="wcome">Wellcome to TODO List App with PHP</h1>
            <h2>EDIT Todo List</h2><br>
            <form class="todo-form" action="" method="POST">
            	<?php
            	$sql = "SELECT * FROM todo WHERE todo_id = $edit_id";
				$rlt = mysqli_query($connection,$sql);
				$data = mysqli_fetch_array($rlt);

            	?>
                <input type="text"  name="txtTodo" value="<?php echo $data['todo_name']; ?>">
                <button type="submit" name="edittodo-btn"><i class="fas fa-plus-circle"></i></button>
              </form>
        
        </div>

        
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>