<?php 

	$name = "test";
	$value = 78;
	$expire = time() + (3600);

	//setcookie($name, $value, $expire);

	//echo time() + 3600;

	//setcookie("teine", "tere", time() + 60);

	//setcookie("$name", null);

	setcookie($name, $value, time() - 3600);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>praktikum 2.8</title>
</head>
<body>
		<pre>
		<?php 

			
			print_r($_COOKIE);

			/* 

			if (isset($_COOKIE["test"])) {
				$test = $_COOKIE["test"];

			} else {
				$test = "";
			}
			*/

			$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";

			echo $test;

		 ?>
		 </pre>
</body>
</html>