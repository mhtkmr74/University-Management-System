<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
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
 
 
<title>Add Employee</title>
<h1>Add Employee</h1>
</head>
<body>
 
    <form method="post" action="empsubmit.php">
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
<label>Department</label>
<input type="text" name="department" />
<br />
<label>Major</label>
<input type="text" name="Major" />
<br>


<br />
<input type="submit" value="Add Employee">
</form>
 
 
 
</body>
</html>
