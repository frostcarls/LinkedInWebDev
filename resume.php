<html>
	<head>
		<link rel = "stylesheet" href = "navigation_bar.css">
		<link rel = "stylesheet" href = "bgimg.css">
		<link rel = "stylesheet" href = "logo.css">
		<link rel = "stylesheet" href = "form_login.css">
		<link rel = "stylesheet" href = "side_menu.css">
		<style type="text/css">
			a {text-decoration: none}

			/* Modal Content/Box */
			.modal-content {
				padding: 10px;
				font-family: Courier , serif;
				font-size: 20px;
			    background-color: #fefefe;
			    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			    border: 1px solid transparent;
				border-radius: 0.3cm;
			    width: 80%; /* Could be more or less, depending on screen size */
			}

		</style>
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	</head>

	<body>
		<form mehtod = "get" action = "raw01.html">
			<button type = "submit">Home</button>
		</form>
		<div id = "logo"> Easy search job</div>

		<div id = "nav">
			<a href="about_us.html">About Us</a>
			<a href="">View Resume</a>
			<a href="">View Job Listing</a>
			<a href="">Submit Your Resume</a>
			<a href="">Submit a job ad</a>
			<a href="">Contacts</a>
		</div>
	</body>
</html>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdev";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$_uname = $_SESSION["uname"];

$sql= "SELECT * FROM sign_up";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($row['email'] == $_uname)
        {
			echo "<div id = \"modal\">";
				echo "<div class = \"modal-content\">";
					echo "<h2>Your Profile</h2><hr><br>";
            		echo "First Name : " . $row['first_Name'] . "<br><br>" . 'Last Name : ' .
					$row['last_Name'] . '<br><br>' . 'Email : ' . $row['email'] . '<br><br>' .
					'Country : ' . $row['country'] . '<br><br>' . 'Mobile No : ' . $row['mobile_no'];

        }
    }
}

mysqli_close($conn);
?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdev";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql= "SELECT * FROM resume";
$result = $conn->query($sql);


if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($row['email'] == $_uname)
        {

            		echo "<br><br>Graduated from : " . $row['gcollege'] . "<br><br>" . 'Graduated year : ' .
					$row['gyear'] . '<br><br>' . 'Experience : ' . $row['experience'] . '<br><br>' .
					'Hobbies : ' . $row['hobby'] . '<br><br>' . 'Languages known :' . $row['languages'];
				echo "</div>";
			echo "</div>";
        }
    }
}
 ?>

<html>
	<hr>
	<footer>
		<p>All rights reserved &copy 2018 Nasha Technologies</p>
		<p>Contact information: <a href="mailto:ashfaaqomg@gmail.com">mailtonashatech@gmail.com</a>.</p>
	</footer>
</html>
