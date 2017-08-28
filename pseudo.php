<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		.bg-red {
			background-color: salmon;
			width: 25px;
			height: 25px !important;
			height: auto;
			display: inline-flex;
			justify-content: center;
			vertical-align: middle;
		}

		.bg-normal {
			background-color: cornsilk;
			width: 25px;
			height: 25px !important;
			height: auto;
			display: inline-flex;
			justify-content: center;
			vertical-align: middle;
		}
	</style>

</head>
<body>

<form method='POST'>
	<span>Enter table size</span><br>
	<input type='text' name='size'>
	<input type='submit' name='submit'>
	<br><br>

</form>

<?php 

if(isset($_POST['submit'])) {

	$arr = [];
	$counter = 0;
	$total = 0;
	$tsize = $_POST['size'];
	$modulo = $_POST['size'] + 1;

	for($i = 1; $i <= $tsize * $_POST['size']; $i++){

		if ($i % $modulo == 1) {

			$arr[$counter] = $i;

			$counter++;

			if($i % $tsize == 0){
				echo "<span class='bg-red'>" . $i . " </span><br>";
			} else {
				echo "<span class='bg-red'>" . $i . " </span>";
			}

		} else {

			if($i % $tsize == 0){
				echo "<span class='bg-normal'>" . $i . " </span><br>";
			} else {
				echo "<span class='bg-normal'>" . $i . " </span>";
			}
		}
	}

	$count = count($arr);
	// echo $count;

	echo "<br>";

	for ($a = 0; $a < $count; $a++){

		$total += $arr[$a];

		if ($a == $count-1){
			echo $arr[$a] . " = " . $total;
		} else {
			echo $arr[$a] . " + ";
		}


		// echo " --> " . $a . " <-- ";

		
		
	}

	


}

 ?>

</body>
</html>