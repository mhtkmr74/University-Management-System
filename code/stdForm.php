<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Add Student</title>
<h1>Add Student</h1>
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
 
    <form method="post" action="stdSubmit.php">
<label>RegNo</label>
<input type="number" name="RegNo" />
<br />
<label>Name</label>
<input type="text" name="name" />
<br />
<label>Email</label>
<input type="text" name="email" />
<br>
<label>DOB</label>
<input type="date" name="Dob" />
<BR>
<label>BloodGroup</label>
<input type="text" name="bloodGroup" />

<label>Major</label>
<input type="text" name="Department" />
<br />


<br />
<input type="submit" value="Add Student">
</form>
 
 
 
</body>
</html>
