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
$reg_no = $conn->real_escape_string($_POST['rollno']);
$sql = "SELECT * FROM late WHERE regno=$reg_no";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>regno</th><th>date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["regno"]."</td><td>".$row["date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
