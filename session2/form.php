<h1>Form example</h1>
<?php 
	if (isset($_POST['register'])) {
		echo "Show get<br>";
		echo $_GET['name'];
		echo "<br>";
		echo $_GET['email'];

		//
		echo "<br>Show post<br>";
		echo $_POST['name'];
		echo "<br>";
		echo $_POST['email'];
			//
		echo "<br>Show request<br>";
		echo $_REQUEST['name'];
		echo "<br>";
		echo $_REQUEST['email'];
	}
?>
<form name="registerForm" action="form.php" method="POST">
	<p>Name:
		<input type="text" name="name">
	</p>
	<p>Email:
		<input type="text" name="email">
	</p>
	<p>
		<input type="submit" name="register" value="Register">
	</p>
</form>