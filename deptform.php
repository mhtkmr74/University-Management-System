<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Add Department</title>
<h1>Add Department</h1>
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
 
    <form method="post" action="depSubmit.php">
<label>Department ID</label>
<input type="text" name="depID" />
<br />
<label>Department Name</label>
<input type="text" name="dName" />
<br>


<br />
<input type="submit" value="Add Department">
</form>
 
 
 
</body>
</html>
