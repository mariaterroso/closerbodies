<?php

include("connection.php");

$sql = "SELECT id, user_id, name, description FROM collection";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["user_id"]. " " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 