<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Add Course</title>
<h1>Add Course</h1>
</head>
<style>
body {
    background-color: lightgrey;
    border: 25px solid green;
    padding: 25px;
    margin: 25px;
    align-content: center;
    margin: auto;
    width: 50%;
}
</style>
<body>
 
    <form method="post" action="crsSubmit.php">
<label>Course Id</label>
<input type="text" name="courseID" />
<br />
<label>Course Name</label>
<input type="text" name="cName" />
<br />
<label>Department Name</label>
<input type="text" name="dName" />
<br>


<br />
<input type="submit" value="Add Course">
</form>
 
 
 
</body>
</html>
