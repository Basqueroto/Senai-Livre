<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert message into the database
if (isset($_POST['message'])) {
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  $sql = "INSERT INTO chat_messages (message) VALUES ('$message')";
  mysqli_query($conn, $sql);
}

// Retrieve messages from the database
$sql = "SELECT * FROM chat_messages ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div class='message'>" . $row['message'] . "</div>";
}

mysqli_close($conn);
?>
