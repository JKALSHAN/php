<?php
 require_once 'server.php';
 echo "<br>";
 $sql = "DELETE FROM MyGuests WHERE id=5";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>