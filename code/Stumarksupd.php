<html>
<body>
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
<h1>Your Details</h1>
<?php
$RegNoT=$_POST['RegNoT'];
$RegNos=$_POST['RegNos'];
$Marks=$_POST['Marks'];
$Att=$_POST['Att'];


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

$sql = "UPDATE student SET Marks=$Marks,Attendance1=$Att WHERE RegNo=$RegNos";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}




//$mysqli->close();
?>




</body>
</html>