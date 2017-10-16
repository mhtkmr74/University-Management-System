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
$RegNos=filter_input(INPUT_POST, 'RegNos');
$abc="paid";
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

$sql = "UPDATE student SET fees='$abc' WHERE RegNo=$RegNos";


if ($conn->query($sql) === TRUE) {
    echo "Fees Paid Successfully";
} else {
    echo "Error updating record: " . $conn->error;
}




//$mysqli->close();
?>




</body>
</html>