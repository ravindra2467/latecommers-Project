<?php 
require_once("config.php");
if((isset($_POST['rollno'])&& $_POST['rollno'] !='') && (isset($_POST['date'])&& $_POST['date'] !=''))
{
 
$reg_no = $conn->real_escape_string($_POST['rollno']);
$date = $conn->real_escape_string($_POST['date']);
echo 'roll no=',$reg_no,'<br>';
echo 'date=',$date,'<br>';


$sql = " INSERT INTO late (regno, date) VALUES ('$reg_no', '$date')";


if($sql == $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! Inserted successfully";
}
}
else
{
echo "Please fill RollNo and Date";
}
header("refresh:1; url:form0get_response.php");
?>