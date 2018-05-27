<?php

$ID = $_POST['id'];

echo '<form action="./index.php">';
echo '<input type="submit" value="Home">';
echo '</form>';

//grabs login information from dbconfig

require_once('../dbconfig.php');
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
   die("Connection failed " . $conn -> connect_error);
}

//layout for editing a student

echo '<h1>Edit Student</h1>';
echo '<form method="post">';
echo '<p>User ID: <input type="text" name="userID" required></p>';
echo '<p>First Name: <input type="text" name="firstName" required></p>';
echo '<p>Last Name: <input type="text" name="lastName" required></p>';
echo '<p>Image: <input type="text" name="image" required></p>';
echo '<p>Note: <textarea name="note" required></textarea></p>';
echo '<input type="submit" name="submit" value="submit">';
echo '<input type="hidden" name="id" value="' . $ID . '">';
echo '</form>';

//cleans it up to avoid injections

if (!empty($_POST['userID'])){
   $ID = $_POST['id'];
   $id = $conn->real_escape_string($_POST['userID']);
   $firstName = $conn->real_escape_string($_POST['firstName']);
   $lastName = $conn->real_escape_string($_POST['lastName']);
   $image = $conn->real_escape_string($_POST['image']);
   $note = $conn->real_escape_string($_POST['note']);

//adds the information
    
   $sql = "update Student set userID = '" . $id . "', firstName = '" . $firstName . "', lastName = '" . $lastName . "', image = '" . $image . "', note = '" . $note . "' where id = '" . $ID . "';";

   if ($conn->query($sql) === TRUE){
      echo "Student edited successfully";
   }
   else {
   	echo "Error: " . $conn->error;
   }
}
?>