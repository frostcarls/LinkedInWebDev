<html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdev";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql= "SELECT * FROM sign_up";
$result = $conn->query($sql);

$email = $_POST['usern'];
$psw = $_POST['psw'];

$flag = 1;

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($row['email'] == $email)
        {
            if($row['password'] == $psw)
            {
                echo "Logged in !";
                $flag = 0;
                break;
            }
        }
    }
}

if($flag == 1) {
    echo "Wrong username/password";
}

$_SESSION["uname"] = $email;
mysqli_close($conn);
header("location: /webdev/PHP/resume.php");
?>
