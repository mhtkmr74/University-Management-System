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

$emaile=$_POST['emaile'];
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

$sql = "SELECT RegNo, Name, Email, Dob, Department ,Major,Payment FROM employee where RegNo=$Ride and Email ='$emaile'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> RegNo: ". $row["RegNo"]. " | Name: ". $row["Name"]. " | Email :" . $row["Email"] . " | Dob: ". $row["Dob"] . " | Department: ". $row["Department"] . " | Major : ". $row["Major"] . " | Payment : ". $row["Payment"]. "<br>";
    }
} else 
    {
    echo "0 results";

 }

?>
    
<h3>Update your Major</h3>
<form action="EmpUpdate.php" method="post">
RegNo:<input type="text" name="RegNos"><br>
Major:<input type="text" name="Majore"><br>
login<input type="submit">
</form>

<hr>
<hr>
<h3>Update your student Marks</h3>

<h3>Fill form</h3>
<form action="Stumarksupd.php" method="post">
TeacherRegNo:<input type="text" name="RegNoT"><br>
StudentRegNo:<input type="text" name="RegNos"><br>
Marks:<input type="text" name="Marks"><br>
Attendance:<input type="text" name="Att"><br>
login<input type="submit">
</form>


<h3>your students</h3>

<?php

$emaile=$_POST['emaile'];
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
$sql = "SELECT RegNo, Name, Email,Dob,BloodGroup,Attendance1,Marks,Major,TeacherRegNo FROM student where TeacherRegNo=$Ride";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> RegNo: ". $row["RegNo"]. " | Name: ". $row["Name"].
                " | Email " . $row["Email"] ." |Dob: " .$row["Dob"]. 
                " | Blood Group: ". $row["BloodGroup"]. " | Attendance: ". $row["Attendance1"]." | Marks: ". $row["Marks"]. " | Major: ". $row["Major"]. " | TeacherRegNo: ". $row["TeacherRegNo"]."<br>";
    }
} else 
    {
    echo "0 results";

 }


//$mysqli->close();
?>




</body>
</html>