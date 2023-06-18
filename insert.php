<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=proyecto', 'root', 'Sistema27*');

// Check if the form was submitted
if (isset($_POST['name']) && isset($_POST['email'])) {

// Insert the data into the database
$sql = "INSERT INTO datos (name, email) VALUES (:name, :email)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->execute();

// Redirect the user to the homepage
header('Location: index.php');

}

?>