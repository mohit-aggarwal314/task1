<?php
	session_start();
	$conn =  mysqli_connect('localhost','root','','employee');
	
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self');</script>";
	}
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Certification Request Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container">
		<div class="header">
			<img src="./download.png" alt="Company Logo">
			<h1>Certification Request Portal</h1>
			<div class="ButtonHeader">
                    <ul class="d-flex">
                    <li class="nav-item active" style="
    padding-left: 56%;
">
                            <a class="nav-link" href="./logout.php"> <img
                                    src="https://img.icons8.com/metro/26/000000/guest-male.png">
                                <?php echo "Welcome " . $_SESSION['email'] ?>
                            </a>
                        </li>
                    </ul>
                </div>
		</div>
		<form action="mail.php" method="post" class="request-form">
			<label for="full-name">Full Name:</label>
			<input type="text" id="full-name" name="full-name" required>

			<label for="full-name">Email</label>
			<input type="email" id="email" name="email" required>

			<label for="employee-id">Employee ID:</label>
			<input type="text" id="employee-id" name="employee-id" required>

			<label for="department">Department:</label>
			<input type="text" id="department" name="department" required>

			<label for="supervisor-name">Supervisor Name:</label>
			<input type="text" id="supervisor-name" name="supervisor-name" required>

			<label for="certification-type">Certification Type:</label>
			<input type="text" id="certification-type" name="certification-type" required>

			<label for="certification-provider">Certification Provider:</label>
			<input type="text" id="certification-provider" name="certification-provider" required>

			<label for="certification-cost">Certification Cost:</label>
			<input type="text" id="certification-cost" name="certification-cost" required>

			<label for="reason-for-request">Reason for Request:</label>
			<textarea id="reason-for-request" name="reason-for-request" required></textarea>

			<label for="estimated-completion-date">Estimated Completion Date:</label>
			<input type="date" id="estimated-completion-date" name="estimated-completion-date" required>

			<button type="submit">Submit Request</button>
		</form>
	</div>
</body>
</html>
