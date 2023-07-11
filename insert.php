<html lang="en">
<body>
<form method="post" action="">
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <label>Email:</label><br>
    <input type="text" name="email"><br>
    <label>Age:</label><br>
    <input type="text" name="age"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
include("php/config.php");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $query = mysqli_query($con,"INSERT INTO users (Username, Email, Age) VALUES ('$username', '$email', '$age')");

    if($query){
        echo "User added successfully";
    } else {
        echo "Error adding user";
    }
}
?>