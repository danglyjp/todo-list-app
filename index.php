<?php
date_default_timezone_set('Asia/Tokyo');
include "db_connect.php";
include "add_todo.php";
include "delete_todo.php";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List App with PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <div id="container">

        <div class="todo-header">
            <h1 class="wcome">Wellcome to TODO List App with PHP</h1>
            <h2>Add new Todo List</h2><br>
            <form class="todo-form" action="" method="POST">
                <input type="text"  name="txtTodo">
                <button type="submit"><i class="fas fa-plus-circle"></i></button>
              </form>
        
        </div>

        <div class="todo-content">
            <table>
                <tr>
                <th class="flex th1">ID</th>
                <th class="flex th2">Todo List</th>
                <th class="flex th3">Date add</th>
                <th class="flex th4">Action</th>
                </tr>
                
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    $todo_id = $row['todo_id'];
                    $todo_name = $row['todo_name'];
                    $todo_date = $row['todo_date'];
                ?>
                <tr>
                    <td class="btn-td"><?php echo $todo_id ?></td>
                    <td class="t_name"><?php echo $todo_name ?></td>
                    <td class="btn-td"><?php echo $todo_date ?></td>
                    <td class="btn-td">
                        <a class="btn-edit" href="edit_todo.php?edit-todo=<?php echo $todo_id; ?>"><i class="fas fa-edit"></i></a> 
                        <a class="btn-delete" href="index.php?delete_todo=<?php echo $todo_id; ?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>

                <?php }?>  
                    
            </table>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>