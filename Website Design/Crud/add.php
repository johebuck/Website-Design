<?php

echo '<form action="./index.php">';
echo '<input type="submit" value="Home">';
echo '</form>';

//grabs log in information from dbconifg

require_once('../dbconfig.php');
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
   die("Connection failed " . $conn -> connect_error);
}

//layout for adding a student

echo '<h1>Add a Student</h1>';
echo '<form method="post">';
echo '<p>User ID: <input type="text" name="id" required></p>';
echo '<p>First Name: <input type="text" name="firstName" required></p>';
echo '<p>Last Name: <input type="text" name="lastName" required></p>';
echo '<p>Image: <input type="text" name="image" required></p>';
echo '<p>Note: <textarea name="note" required></textarea></p>';
echo '<input type="submit" name="submit" value="submit">';
echo '</form>';

//cleans it up to avoid injections

if (!empty($_POST)){
   $id = $conn->real_escape_string($_POST['id']);
   $firstName = $conn->real_escape_string($_POST['firstName']);
   $lastName = $conn->real_escape_string($_POST['lastName']);
   $image = $conn->real_escape_string($_POST['image']);
   $note = $conn->real_escape_string($_POST['note']);

//adds the information
    
   $sql = "insert into Student (userId, firstName, lastName, image, note) values ('$id', '$firstName', '$lastName', '$image', '$note')";

   if ($conn->query($sql) === TRUE){
      echo "Student added";
   }
   else {
      echo "Error: " . $conn->error;
   }  
}
?>