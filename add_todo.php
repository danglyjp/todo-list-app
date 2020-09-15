<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $txtTodo = $_POST['txtTodo'];
    $t_date  = date("Y-m-d H:i:s");
    $sql = "INSERT INTO todo(todo_name,todo_date) VALUES ('$txtTodo','$t_date');";
    $results = mysqli_query($connection,$sql);


    if (!$results) {
        die("Failed");
    }else{
        header("Location:index.php?todo-added");
    }
}


?>