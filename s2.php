<?php
 require_once 'server.php';
 echo "<br>";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jitender', 'kalshan', 'jitender@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>