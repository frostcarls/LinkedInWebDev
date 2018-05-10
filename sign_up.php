<html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdev";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connection successful !";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobno = $_POST["mobno"];
$email = $_POST["email"];
$country = $_POST["country"];
$psw = $_POST["psw"];

$sql = "INSERT INTO sign_up (first_Name, last_Name, mobile_no, country, email, password)
VALUES ('$fname', '$lname', '$mobno', '$country', '$email', '$psw')";

if(mysqli_query($conn, $sql)) {
    echo "Sign Up completed !!";
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}

mysqli_close($conn);

header('location: /webdev/raw01.html');
?>
</html>
