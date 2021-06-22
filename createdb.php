<?php

include_once "config.php";

if($conn === false)
{
die("Sorry it did not connect " . $conn->connect_error);
}
else
{
$sql = "CREATE DATABASE testdb";

if($conn->query($sql)===true){
    echo "You are now Connected and your database was created";
}else{
    echo "Could not connect " . $sql . " " . $conn->error;
}

}
$conn->close();

?>