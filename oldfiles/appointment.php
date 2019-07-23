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

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[3]</option>";
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <select>
            <?php echo $options;?>
        </select>

    </body>

</html>