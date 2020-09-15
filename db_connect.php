<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','todo');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (!$connection) {
    die("fail connect to database".mysqli_error($connection));
}

$query = "SELECT * FROM todo ORDER BY todo_id DESC";
$result = mysqli_query($connection,$query);