<?php
ob_start();
$int1 = $_POST["int1"];
$int2 = $_POST["int2"];
$operator = $_POST["operator"];

switch ($operator) {
	case '%':
		$answer = $int % $int2;
		break;

	case '/':
		$answer = $int / $int2;
		break;

	case '*':
		$answer = $int * $int2;
		break;

	case '+':
		$answer = $int + $int2;
		break;

	case '-':
		$answer = $int - $int2;
		break;
	
	default:
		# code...
		$answer = "Invalid operator. Please provide a valid operator";
		break;
}
echo $answer;
header("Location: calculator.php?answer=$answer");