<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latecommers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>regno</th><th>name</th><th>mobile_number</th><th>section</th><th>year</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["regno"]."</td><td>".$row["name"]."</td><td>".$row["mobile_number"]."</td><td>".$row["section"]."</td><td>".$row["year"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
