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
$sqli='';
$Ride=$_POST['Ride'];
$TRide=$_POST['TRide'];



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

$sql = "UPDATE student SET TeacherRegNo=$TRide WHERE RegNo=$Ride";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



//$mysqli->close();
?>

</body>
</html>
