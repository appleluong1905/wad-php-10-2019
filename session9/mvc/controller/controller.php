<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$model = new Model();
			switch ($action) {
				case 'home':
					include 'view/home.php';
					break;
				case 'news':
					$newsList = $model->getNews();
					include 'view/news.php';
					break;
				case 'products':
					// Check login
					if (!isset($_SESSION['login'])) {
						header('Location: index.php?action=login');
					}
					// End check login
				  $productList = $model->getProductList();
					include 'view/products.php';
					break;
				case 'contact':
					include 'view/contact.php';
					break;
				case 'add_product':
					// Check login
					if (!isset($_SESSION['login'])) {
						header('Location: index.php?action=login');
					}
					// End check login
					if (isset($_POST['add_product'])) {
						$title = $_POST['title'];
						echo $title;
					}
					include 'view/add_product.php';
					break;	
				case 'login':
					$errorLogin = '';
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						if (!empty($model->checkLogin($username, $password))) {
							$_SESSION['login'] = $username;
							header('Location: index.php?action=products');
						}
						$errorLogin = 'Wrong username or password';
					}
					include 'view/login.php';
					break;
				case 'logout':
					unset($_SESSION['login']);
					header('Location: index.php?action=login');
					break;
				default:
					include 'view/home.php';
					break;
			}
		}
	}
?>