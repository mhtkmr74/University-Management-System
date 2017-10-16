<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
*     Utilisation de "mysqli" à la place de "mysql" qui est obsolète.
* Change the value of parameter 3 if you have set a password on the root userid
* Changer la valeur du 3e paramètre si vous avez mis un mot de passe à root
*/
$mysqli='';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitymanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$RegNo=$_POST['RegNo'];
$Name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['Dob'];
$bloodGroup=$_POST['bloodGroup'];
$department=$_POST['Department'];

$sql ="INSERT INTO student (RegNo,Name,Email,Dob,BloodGroup,Major)
		        VALUES ('$RegNo','$Name','$email','$dob','$bloodGroup','$department')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$mysqli->close();
?>
  </body>
</html>
