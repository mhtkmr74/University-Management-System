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
$mysqli='';
$Ride=$_POST['Ride'];
$email=$_POST['email'];

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
$sql = "SELECT RegNo, Name, Email,Dob,BloodGroup,Attendance1,Marks,Major,TeacherRegNo,fees FROM student where RegNo=$Ride and Email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> RegNo: ". $row["RegNo"]. " | Name: ". $row["Name"].
                " | Email " . $row["Email"] ." |Dob: " .$row["Dob"]. 
                " | Blood Group: ". $row["BloodGroup"]. " | Attendance: ". $row["Attendance1"]." | Marks: ". $row["Marks"]. " | Major: ". $row["Major"]. " | TeacherRegNo: ". $row["TeacherRegNo"]. " | Fees: ". $row["fees"]. "<br>";
    }
} else 
    {
    echo "0 results";

 }
 
 
 
 
 
 
 
//$conn->close();
?>

<h4>Update your Major</h4>

    <form action="newStudent2.php" method="post">
RegNo: <input type="text" name="Ride"><br>
Major: <input type="text" name="Majore"><br>
go: <input type="submit">
</form>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitymanagement";
$mysqli='';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT Cid, Cname, DName FROM courses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Course ID: ". $row["Cid"]. " | Course Name: ". $row["Cname"].
                " | Department Name: " . $row["DName"]."<br>";
    }
} else 
    {
    echo "0 results";

 }


//$mysqli->close();
?>













</body>
</html>

