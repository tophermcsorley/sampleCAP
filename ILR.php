<!--aaron McSorley-->



<!DOCTYPE HTML>
<html>
<Head><center><h1>Individual Learning Record</h1><br>
  <img src="http://img.freepik.com/free-vector/chemical-in-glass-beakers-illustration_1308-1035.jpg?size=338&ext=jpg" alt="Chemistry Beakers" style="width:304px;height:228px;">
</center></Head>

<div id="form" style="text-align: center">
<style>
input[type=submit], input[type=reset]
{
    background-color: #4CAF50;
    border: none;
    color: black;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
<body>

<div id="form" style="text-align: center">
<form action="ILR.php" method="POST" enctype="multipart/form-data">
StudentID: <input type="text" name="StudentID" required>
Name: <input type="text" name="name" required>
E-mail: <input type="text" name="email" required><br>

Semester: <select>
  <option value="Fall" selected>Fall</option>
  <option value="Spring">Spring</option>
  <option value="Summer">Summer</option>
</select>



Creation Date: <input type="date" name="Date" Id="entryDate" readonly><br>

Year Designation: <select>
  <option value="Freshman" selected>Freshman</option>
  <option value="Sophomore">Sophomore</option>
  <option value="Junior">Junior</option>
  <option value="Senior">Senior</option>
</select>
Major: <select>
  <option value="Chemistry" selected>Chemistry</option>
  <option value="BioChemistry">BioChemistry</option>
  <option value="Other">Other</option>
</select>


<br>


<input type="submit" value="Submit">

</form>
</div>
<script>

document.getElementById('entryDate').valueAsDate = new Date();
function setDate(){

  document.getElementById('entryDate').valueAsDate = new Date();
}
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE TABLE StudentInformation (
StudentID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Email VARCHAR(50),
Major VARCHAR(50),
YearDesignation VARCHAR(30),
entryDate VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "StudentInformation created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


?>

</body>
</html>
