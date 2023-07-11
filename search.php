<?php
$fnumber=$_GET['fnumber'];
include("php/config.php");

$query = mysqli_query($con,"SELECT * FROM users WHERE Id=$fnumber");
if(mysqli_num_rows($query) == 0){
    echo "User not found";
} else {
    while($result = mysqli_fetch_assoc($query)){
        $res_Uname = $result['Username'];
        $res_Email = $result['Email'];
        $res_Age = $result['Age'];
        $res_id = $result['Id'];
    }

    echo "Username: " . $res_Uname . "<br>";
    echo "Email: " . $res_Email . "<br>";
    echo "Age: " . $res_Age . "<br>";
    echo "ID: " . $res_id . "<br>";
}
?>