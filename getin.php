
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymnsb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>password</th><th>Name</th></tr>";
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["user_id"]."</td><td>".$row["username"]." ".$row["password"]."</td><td>".$row["user_id"]."</td></tr>";
  } echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>