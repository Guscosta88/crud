
<?php
include "config.php";


if($conn===false)
{
die("Sorry it did not connect " . $conn->connect_error);
}

$sql = "CREATE TABLE employees(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    LastName varchar(50) NOT NULL,
    FirstName varchar(50) NOT NULL,
    BirthDate date NOT NULL,
    image varchar(50) NOT NULL,
    Notes text
);";


if($conn->query($sql)===true){
    echo "You are now Connected, and your table was created";
}else{
    echo "Could not connect " . $sql . " " . $conn->error;
}

$conn->close();

?>