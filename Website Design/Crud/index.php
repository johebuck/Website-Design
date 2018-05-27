<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title>
    <style>
        
    h1 {color: #ff0000;}
        
    table {
    border-collapse: collapse;
    border-style: solid;
    border-color: #ff9900;
    width: 50%;
}

th, td {
    border-style: solid;
    border-color: #ff9900;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #0033cc;
    color: #ff9900;
   
}
    </style>
</head>
<body>
<?php
    
//Grabs information to log in from dbconfig    
    
require_once('../dbconfig.php');
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed " . $conn->connect_error);
}

//table information
    
$sql = "select * from Student";
$result = $conn->query($sql);

//add student
    
echo '<form action="./add.php" method="get">';
echo '<input type="submit" value="Add Student">';
echo '</form>';
echo "<br>";

//makes table
    
echo '<table>';
echo '<th>Options</th><th>ID</th><th>Name</th><th>Image</th><th>Note</th>';

  if ($result->num_rows > 0) {
  $i = 1;
  while ($row = $result->fetch_assoc()) {
      echo "<tr><td><form method='post' action='./edit.php'><input type='submit' value='Edit'><input type='hidden' name='id' value=" . $row['id'] . "></form><form method='post' action='./delete.php'><input type='submit' value='Delete'><input type='hidden' name='id' value=" . $row['id'] . "></form></td><td>" . $row["id"] . "</td><td>" . $row["firstName"] . " " . $row["lastName"] . "</td><td><img src='" . $row["image"] . "' height='70' width='70'></td><td>" . $row["note"] . "</td></tr>";
  }
}
else {
   echo "0 results";
}
echo '</table>';

//close connection

$conn->close();

?>
</body>
</html>
