
<?php
include "config.php";


if($conn===false)
{
die("Sorry it did not connect " . $conn->connect_error);
}

$sql = "INSERT INTO employees (LastName, FirstName, BirthDate, image, Notes)
            VALUES ('Doe','John','1985-05-05','john.jpg','My Name Is John'),


            ('Costa','Gus','1988-08-18','gus.jpg','My Name Is Gus'),


            ('Portman','Natalie','1982-09-12','natalie.jpg','My Name Is Natalie'),


            ('Ford','Harrisson','1965-05-25','harrisson.jpg','My Name Is Harrisson'),


            ('Yung','Carl','1995-02-06','carl.jpg','My Name Is carl')";


if($conn->query($sql)===true){
    echo "You are now Connected, and your Data was Inserted";
}else{
    echo "Could not connect " . $sql . " " . $conn->error;
}

$conn->close();

?>