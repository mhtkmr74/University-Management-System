<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
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
 
<h1>Ask Question</h1>
</head>
<body>
 
    <form method="post" action="forumque.php">
<label>Question</label>
<input type="text" name="Quest" />
<br>


<br />
<input type="submit" value="submit question">
</form>
 
    <hr>
    <h3>Previous Questions and Answers</h3>    
    
    <?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
*     Utilisation de "mysqli" à la place de "mysql" qui est obsolète.
* Change the value of parameter 3 if you have set a password on the root userid
* Changer la valeur du 3e paramètre si vous avez mis un mot de passe à root
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitymanagement";
$mysqli=0;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT Question,Answer FROM forum";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Question: ". $row["Question"]."<br>". " | Answer: ". $row["Answer"]."<br>";
    }
} else 
    {
    echo "0 results";

 }


//$mysqli->close();
?>

    
    
</body>
</html>
 
