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

$sql = "SELECT RegNo, Name, Email,Dob,BloodGroup,Attendance1,Marks,Major,TeacherRegNo FROM student where RegNo=$Ride";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> RegNo: ". $row["RegNo"]. " | Name: ". $row["Name"].
                " | Email " . $row["Email"] ." |Dob: " .$row["Dob"]. 
                " | Blood Group: ". $row["BloodGroup"]. " | Attendance: ". $row["Attendance1"]." | Marks: ". $row["Marks"]. " | Major: ". $row["Major"]. " | TeacherRegNo: ". $row["TeacherRegNo"]."<br>";
    }
}
 
 
$sql = "SELECT RegNo, Name, Email,Dob,Department,Major FROM employee where RegNo=$Ride";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> RegNo: ". $row["RegNo"]. " | Name: ". $row["Name"]. " | Email " . $row["Email"] ." |Dob: " .$row["Dob"]. " | Department: " .$row["Department"]. " | Major: " .$row["Major"]."<br>";
    }
}
 
 

$conn->close();
?>
</body>
</html>