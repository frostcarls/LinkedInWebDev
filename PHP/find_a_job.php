<html>
	<head>
		<link rel = "stylesheet" href = "../css/navigation_bar.css">
		<link rel = "stylesheet" href = "../css/bgimg.css">
		<link rel = "stylesheet" href = "../css/logo.css">
		<link rel = "stylesheet" href = "../css/form_login.css">
		<link rel = "stylesheet" href = "../css/side_menu.css">
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
		<form mehtod = "get" action = "../raw01.html">
			<button type = "submit">Home</button>
		</form>
		<div id = "logo"> Easy search job</div>

		<div id = "nav">
			<a href="../pages/about_us.html">About Us</a>
			<a href="resume.php">View Resume</a>
			<a href="job_offer.php">View Job Listing</a>
			<a href="../pages/submit_resume.html">Submit Your Resume</a>
			<a href="../pages/contact.html">Contacts</a>
		</div>
	</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdev";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql= "SELECT * FROM find_job";
$result = $conn->query($sql);

$key = $_POST["company"];

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($row['id_no'] == $key)
        {
            echo "<div id = \"modal\">";
            echo "<div class = \"modal-content\">";
            echo "<h2>Job Offerings :</h2><hr><br>";
                	 echo "Company Name : " . $row['com_name'] . "<br>Region : " .
    				$row['region'] . '<br>Job offered : ' . $row['job'] . '<br><br><br>';
                    echo "</div></div>";
            break;
        }
    }
}

mysqli_close($conn);
?>
