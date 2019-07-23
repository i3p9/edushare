<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Submit a course</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
<div class="wrapper">
<h2>Hello, Teacher!</h2>
<h3>Submit your course here</h3>
<form action="config/submit.php" method="post">
<div class="form-group">
                <label for="name">Course Name</label>
                <select type="text" name="name" class="form-control">
                <option value="CSE471">CSE471</option>
                <option value="CSE110">CSE110</option>
                <option value="CSE220">CSE220</option>
                <option value="EEE417">EEE417</option>
                <option value="EEE500">EEE500</option>
                <option value="STA201">STA201</option>
                <option value="MAT120">MAT120</option>
                <option value="STA201">STA201</option>
                <option value="FRN101">FRN101</option>
                </select>
            </div>
            <div class="form-group">
                <label>Enter a short course description</label>
                <textarea type="text" class="form-control" rows="5" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>Enter your name: </label>
                <input type="text" name="teacher" class="form-control">
            </div>
            <div class="form-group">
                <label for="coursetype">Course Type</label>
                <select type="text" name="coursetype" class="form-control">
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="OTH">OTHER</option>
                </select>
            </div>
            <div class="form-group">
                <label>Enter your preferred appointment time: </label>
                <input type="text" name="appointment" class="form-control">
            </div>
            <div class="form-group">
                <label>Enter your Edushare username: </label>
                <input type="text" name="user" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>

</form>
</div> 
<?php require "config.php"?>

</body>
</html>