<?php 

// connect to datbase
$conn = mysql_connect('localhost', 'danilo', 'test1234', 'ninja_pizza');

// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>