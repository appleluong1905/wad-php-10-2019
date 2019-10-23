<?php 
	include 'oop.php';
	class Student extends User {
		public function setStudentName() {
			$this->setUsername();
		}

		public function setKey() {
			echo "ldkfjg345345345";
		}
	}

	$student = new Student();
	$student->setKey();
?>