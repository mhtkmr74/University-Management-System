<html>
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
<h1>Your Details</h1>
<?php

$Ride=$_POST['Ride'];

$mysqli=0;

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

$sqlz = "DELETE FROM student WHERE RegNo=$Ride";

if ($conn->query($sqlz) === TRUE) {
    echo "";
} 

$sql = "DELETE FROM employee WHERE RegNo=$Ride";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} 

//$conn->close();
?>
</body>
</html>
