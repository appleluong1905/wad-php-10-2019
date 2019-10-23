<?php 
	class User {

		// public, protected, private;
		public $userName;
		public $email;

		private function setUsername() {
			echo "My name";
		}

		public function setKey() {
			echo "khsdfkjsdf";
		}

	}

	$user = new User();
	$user->setKey();
	// $user->userName;

?>