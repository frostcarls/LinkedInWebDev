<html>
	<head>
		<link rel = "stylesheet" href = "navigation_bar.css">
		<link rel = "stylesheet" href = "bgimg.css">
		<link rel = "stylesheet" href = "logo.css">
		<link rel = "stylesheet" href = "form_login.css">
		<link rel = "stylesheet" href = "side_menu.css">
		<style type="text/css">
            a {text-decoration: none}

            div#forgot {
                /* Modal Content/Box */
    			font-family: Courier , serif;
    			font-size: 20px;
    			background-color: #fefefe;
    			margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    			border: 1px solid transparent;
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
			<a href="resume.php">View Resume</a>
			<a href="">View Job Listing</a>
			<a href="">Submit Your Resume</a>
			<a href="">Submit a job ad</a>
			<a href="">Contacts</a>
		</div>

        <div id = "forgot">
            Enter the email address :
            <form method = "POST" action = "forgot.php">
                <input type = "text" name = "mail" size = "40" placeholder = "Email address">
                <button type = "submit">Confirm</button>
            </form>
        </div>
    </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdev";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$email = $_POST['mail'];

$sql= "SELECT * FROM sign_up";
$result = $conn->query($sql);

$flag = 1;

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($row['email'] == $email)
        {
            echo "<div id = \"forgot\">Your password is : " . $row['password'] . "</div>";
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
