<?php 
	echo "Hello world!";
?>
<h1>Hello HTML</h1>
echo "Hello world!";
<?php 
	echo "<br>";
	// Bien trong PHP
	$myClass = "WAD PHP";
	echo $myClass;
	$loptoi = "WAD PHP"; // Khong nen
	// camel
	$defineMyUserForClass = "Test";
	$ab = "Demo test"; // Khong nen

	// Cac phep toan co ban: +, -, *, /, %
	$numberOne = 7;
	$numberTow = 8;
	echo "<br>";
	echo $numberOne + $numberTow;
	// echo $numberOne+$numberTow; // Khong nen
	//$numberTow=8; // Khong nen
	// => Convention code
	// Cac phep so sanh: >, <, >=, <=, ==, !=

	// Ham trong PHP
	function myFunction() {
		echo "Test function";
	}
	echo "<br>";
	myFunction();
	function myFunction1() {
		$a = 5;
		$b = 3;
		return $a + $b;
	}
	echo "<br>";
	echo myFunction1();
	function myFunction2($x = 5, $y = 4) {
		return $x * $y;
	}

	echo "<br>";
	echo myFunction2(6, 7);
		echo "<br>";
	echo myFunction2();

	// cau dieu kien
	// 1.
	//if (dieu kien) {
		// neu dieu kien dung thi thuc hien cau lenh o day
	//}
	// 2.
	//if (dieu kien) {
		// neu dieu kien dung thi thuc hien cau lenh o day
	//} else {
		// neu dieu kien sai thi thuc hien cau lenh o day
	//}
	// 3.
	//if (dieu kien) {
		// neu dieu kien dung thi thuc hien cau lenh o day
	//} else if (dieu kien 2){
		// neu dieu kien 2 dung thi thuc hien cau lenh o day
	//} else {
		// neu dieu kien 2 sai thi thuc hien cau lenh o day
	//}



	// switch (bien) {
	// 	case 'value1':
	// 		Khi bien bang gia tri value1 thi thuc hien cau
	//    lenh nay	
	// 		break;
	// 	case 'value2':
	// 		Khi bien bang gia tri value2 thi thuc hien cau
	//    lenh nay	
	// 		break;
	// 	default:
	// 		Khi bien khong bang gia tri value1, value2,.. //    thithuc hien cau lenh nay	
	// 		break;
	// }

	// vong lap: for, while, do while
	for ($i = 1; $i < 10; $i++) {
		echo "$i <br>";
	}
	$n = 1;
	while ($n < 10) {
		echo "$n <br>";
		$n++;	
	}
	$m = 1;
	do {
		echo "$m <br>";
		$m++;	
	} while ($m < 10)
?>
