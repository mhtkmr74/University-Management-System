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



<h5>Now Select Teachers</h5>
    
<form action="newStudent3.php" method="post">
YourRegNo: <input type="text" name="Ride"><br>
TeacherRegNo : <input type="text" name="TRide"><br>
See details: <input type="submit">
</form>
    
    
    
<h1>Your Details</h1>
<?php
$sqli='';
$Ride=$_POST['Ride'];
$Majore=$_POST['Majore'];



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

$sql = "UPDATE student SET Major='$Majore' WHERE RegNo=$Ride";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sqlz = "SELECT RegNo, Name, Email,Dob,Department,Major FROM employee where Major='$Majore'";
$result = $conn->query($sqlz);
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

