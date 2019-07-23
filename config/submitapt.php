<?php
if(isset($_POST["submit"]))
{


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testsite";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
$teauser = $_POST["teauser"];
$requser = $_POST["requser"];
$coursetitle = $_POST["coursetitle"];
$time = $_POST["time"];
$comment = $_POST["comment"];

$sql = ("INSERT INTO appointment (teauser,requser,coursetitle,time,comment) VALUES ('$teauser','$requser','$coursetitle','$time','$comment')"); 

if ($conn->query($sql) === TRUE) {
    echo "New course added successfully";
    $conn->close();
    header("location: ../aptadded.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>