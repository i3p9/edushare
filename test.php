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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <!-- <td rowspan="2">1</td> -->
                        <td><a href="courses/cse110.php">CSE110</a></td>
                        <td>Bla Bla Bla</td>
                        <td>Abrar Salehin</td>
                    </tr>
                    <tr>
                        <td>CSE 220</td>
                        <td>Bla Bla Bla</td>
                        <td>Abrar Salehiiiin</td>
                    </tr>
                    <tr>
                        <td>CSE 330</td>
                        <td>Bla Bla Bla</td>
                        <td>Abraaaar</td>
                    </tr>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <!-- <td rowspan="2">1</td> -->
                        <td>EEE 110</td>
                        <td>Bla Bla Bla</td>
                        <td>Abrar Salehin</td>
                    </tr>
                    <tr>
                        <td>EEE 220</td>
                        <td>Bla Bla Bla</td>
                        <td>Abrar Salehiiiin</td>
                    </tr>
                    <tr>
                        <td>EEE 330</td>
                        <td>Bla Bla Bla</td>
                        <td>Abraaaar</td>
                    </tr>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <!-- <td rowspan="2">1</td> -->
                        <td>ENG 110</td>
                        <td>Bla Bla Bla</td>
                        <td>Abrar Salehin</td>
                    </tr>
                    <tr>
                        <td>FRN 101</td>
                        <td>Bla Bla Bla</td>
                        <td>Abrar Salehiiiin</td>
                    </tr>
                    <tr>
                        <td>STA 201</td>
                        <td>Bla Bla Bla</td>
                        <td>Abraaaar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
