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
 
$name = $_POST["name"];
$description = $_POST["description"];
$teacher = $_POST["teacher"];
$coursetype = $_POST["coursetype"];
$appointment = $_POST["appointment"];
$user = $_POST["user"];

$sql = ("INSERT INTO course (name,description,teacher,coursetype,appointment,user) VALUES ('$name','$description','$teacher','$coursetype','$appointment','$user')"); 

if ($conn->query($sql) === TRUE) {
    echo "New course added successfully";
    $conn->close();
    header("location: ../courseadded.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>