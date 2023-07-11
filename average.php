<?php
include("php/config.php");

$query = mysqli_query($con,"SELECT AVG(Age) AS average_age FROM users");
$result = mysqli_fetch_assoc($query);
$average_age = $result['average_age'];

echo "Average age of users: " . $average_age;
?>