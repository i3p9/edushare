<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "testsite";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `course`";

$result = mysqli_query($connect, $query);
//$unique = array_unique($result);

$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[6] - $row[3]</option>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Make an appointment with a teacher</h1>
    </div>
    <div class="wrapper">
    <form action="config/submitapt.php" method="post">
    <div class="form-group">
                <label for="user">See the teacher username</label>
                <select type="text" name="yop" class="form-control">    
                <?php echo $options;?>
                </select>
    </div>
    <div class="form-group">
                <label>Enter your username: </label>
                <input type="text" name="requser" class="form-control">
</div>
<div class="form-group">
                <label>Enter your Teacher's username from the list: </label>
                <input type="text" name="teauser" class="form-control">
</div>
    <div class="form-group">
                <label>Enter course: </label>
                <input type="text" name="coursetitle" class="form-control">
    </div>
    <div class="form-group">
                <label>Enter preferred time: </label>
                <input type="text" name="time" class="form-control">
    </div>
    <div class="form-group">
                <label>Enter additional commnet: </label>
                <input type="text" name="comment" class="form-control">
    </div>
    <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
    </form>
    </div>
    <?php require "config.php"?>
    </body>
    </html>