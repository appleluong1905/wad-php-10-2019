<?php 
	include 'config/database.php';
 class Model extends Connect {
 		public function getNews() {
 			return 'news get from db';
 		}

 		public function getProductList() {
 			$sql = "SELECT * FROM products";
 			return mysqli_query($this->connect(), $sql);
 		}

 		public function checkLogin($username, $password) {
 			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
 			$check = mysqli_query($this->connect(), $sql);
 			return mysqli_fetch_array($check);
 		}

 }
?>