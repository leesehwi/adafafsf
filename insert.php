<?php
$enumber = filter_input(INPUT_POST, 'enumber');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');
$dept = filter_input(INPUT_POST, 'dept');

$host = "localhost";
$dbusername = "root";
$dbpassword = "gs9597";
$dbname = "sehwiweb";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO zzzz (enumber, username, password, gender, dept, email)
values ('$enumber','$username', '$password', '$gender', '$dept', '$email')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>