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
				  $productList = $model->getProductList();
					include 'view/products.php';
					break;
				case 'contact':
					include 'view/contact.php';
					break;
				default:
					include 'view/home.php';
					break;
			}
		}
	}
?>