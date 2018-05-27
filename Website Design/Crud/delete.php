<?php

echo '<form action="./index.php">';
echo '<input type="submit" value="Home">';
echo '</form>';

$ID = $_POST['id'];

require_once('../dbconfig.php');
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
   die("Connection failed " . $conn -> connect_error);
}


$sql = "DELETE FROM Student WHERE id = '". $ID ."';";

   if ($conn->query($sql) === TRUE){
      echo "Student deleted successfully";
   }
   else {
   	echo "Error: " . $conn->error;
   }

?>