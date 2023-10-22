<?php

$con = mysqli_connect('localhost', 'root');

if($con)
{
    echo "Connection successful";
}
else{
    echo "Connection Unsuccessful";
}

mysqli_select_db($con, 'fitness');

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$locality = $_POST['locality'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$query = "insert into data (name,age,gender,locality,email,mobile) values('$name','$age','$gender','$locality','$email','$mobile')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');
?>