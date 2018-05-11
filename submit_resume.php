<html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdev";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connection successful !";

$gcollege = $_POST['gcollege'];
$gyear = $_POST['gyear'];
$exp = $_POST['exp'];
$hobby = $_POST['hobbies'];
$lang = $_POST['lang'];
$email = $_POST['email'];

$_SESSION['uname'] = $email;

$sql = "INSERT INTO resume (gcollege, gyear, experience, hobby, languages, email)
VALUES ('$gcollege', '$gyear', '$exp', '$hobby', '$lang', '$email')";

mysqli_close($conn);

header('location: /webdev/resume.php');
?>
</html>
