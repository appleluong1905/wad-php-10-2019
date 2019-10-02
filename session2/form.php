<h1>Form example</h1>
<?php 
	if (isset($_POST['register'])) {
		//
		echo $_POST['name'];
		echo "<br>";
		echo $_POST['email'];
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