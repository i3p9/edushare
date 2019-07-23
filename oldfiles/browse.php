<!DOCTYPE html>
<html lang="en">
<head>
  <title>Browse Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<h2>Browse courses</h2>

<div class="bs-docs-example">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#cse" data-toggle="tab">CSE Courses</a>
        </li>
        <li><a href="#eee" data-toggle="tab">EEE Courses</a>
        </li>
        <li><a href="#other" data-toggle="tab">Other Courses</a>
        </li>
    </ul>
    
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="cse">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Teacher</th>
                        <th>Appointment Time</th>
                        <th>Book</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$conn = mysqli_connect("localhost", "root", "", "testsite");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, description, teacher, coursetype, appointment FROM course";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    if($row["coursetype"] === "CSE"){
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["description"] . "</td><td>"
. $row["teacher"]. "</td><td>" . $row["appointment"]. "</td></tr>";
    }
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                </tbody>
            </table>
        </div>
        
        <div class="tab-pane fade" id="eee">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Teacher</th>
                        <th>Appointment Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$conn = mysqli_connect("localhost", "root", "", "testsite");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, description, teacher, coursetype, appointment FROM course";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    if($row["coursetype"] === "EEE"){
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["description"] . "</td><td>"
. $row["teacher"]. "</td><td>" . $row["appointment"]. "</td></tr>";
    }
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="other">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Teacher</th>
                        <th>Appointment Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$conn = mysqli_connect("localhost", "root", "", "testsite");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, description, teacher, coursetype, appointment FROM course";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    if($row["coursetype"] === "OTH"){
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["description"] . "</td><td>"
. $row["teacher"]. "</td><td>" . $row["appointment"]. "</td></tr>";
    }
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
