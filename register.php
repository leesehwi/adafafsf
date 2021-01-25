<?php
$userid = $_POST['userid'];
$password = $_POST['password'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$dept = $_POST['dept'];

$host = "183.100.228.173";
$dbusername = "sehwi";
$dbpassword = "gs9597";
$dbname = "sehwiweb";
// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (userid, password, username, gender, email, dept)
values ('$userid','$password', '$username', '$gender', '$email', '$dept')";
    if ($conn->query($sql)){
        echo "<script>location.href='success.html'</script>";
    }
}
?>