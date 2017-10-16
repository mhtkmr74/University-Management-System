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
$sql = "SELECT RegNo, Name, Email,Dob,Department,Major FROM employee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> RegNo: ". $row["RegNo"]. " | Name: ". $row["Name"]. " | Email " . $row["Email"] ." |Dob: " .$row["Dob"]. " | Department: " .$row["Department"]. " | Major: " .$row["Major"]."<br>";
    }
} else 
    {
    echo "0 results";

 }


//$mysqli->close();
?>

    </body>
</html>





