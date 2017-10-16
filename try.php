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
$sql = "SELECT department.Did,department.DName,courses.Cid,courses.Cname FROM department
INNER JOIN courses ON department.DName = courses.DName ORDER BY Did;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> did: ". $row["Did"]. " | DepName: ". $row["DName"]. " | Courseid " . $row["Cid"] . " | CourseName: ". $row["Cname"]."<br>";
    }
} else 
    {
    echo "0 results";

 }


//$mysqli->close();
?>

    </body>
</html>





