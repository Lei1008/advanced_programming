<!DOCTYPE html>
<html>
<head>
	<title>Assignment One</title>
</head>
<style type="text/css">

	.column {
		  float: left;
		  width: 33.33%;
		  margin-top: 10%;
		}

	.row:after {
	  content: "";
	  display: table;
	  clear: both;
		}

	.column h1{
		margin-top: 30%;
	}

</style>

<body>

<div class="row">
	<div class="column">

		<h1>Lailynette D. Burton</h1>

	</div>

	<div class="column">
		<form action="index.php" method="POST">
			<br>
			<h2>Calculator</h2>
			<br>
				<h5>Input first number:</h5>
				<input type="text" name="firstNum">
				<br>
				<h5>Input second number:</h5>
				<input type="text" name="secondNum">
				<br>
				<br>
				<button type="submit" name="operation" value="add">+</button>
				<button type="submit" name="operation" value="sub">-</button>
				<button type="submit" name="operation" value="multi">*</button>
				<button type="submit" name="operation" value="div">/</button>
	
	

	<?php

	if(isset($_POST['operation'])){

		$num1 = $_POST['firstNum'];
		$num2 = $_POST['secondNum'];

		$operation = $_POST['operation'];

		switch ($operation) {
			case "add":
					
					$ans = $num1 + $num2;
				break;

			case "sub":
					
					$ans = $num1 - $num2;
				break;

			case "multi":
					
					$ans = $num1 * $num2;
				break;

			case "div":
					
					$ans = $num1 / $num2;
				break;	

			default:
				 echo "An error has occured!";
				break;

			}

			echo "<br><br><div> Result: ".$ans. "</div>";
		}	
	?>

	</form>
</div>

	<div class="column">
		<form action="" method="POST">
		
			<br>
			<h2>Get the GCD</h2>
			<br>
			<h5>Input first number:</h5>
			<input type="text" name="fNum">
			<br>
			<h5>Input second number:</h5>
			<input type="text" name="sNum">
			<br>
			<br>
			<button name="submit" type="submit">Submit</button>

<!--  end row -->

		<?php
	    if(isset($_POST['submit'])){

			$num1 = $_POST['fNum'];
			$num2 = $_POST['sNum'];


			if($num1 > $num2)
	              {
	                $temp = $num1;
	                $num1 = $num2;
	                $num2 = $temp;
	              }

	        for($x = 1; $x < ($num1+1); $x++)
	              {
	                if ($num1 % $x == 0 and $num2 % $x == 0)
	                $gcd = $x;
	              }

	            echo "<br><br>The GCD is: ". $gcd;

	       }
	 
		?>
		</form>
	</div>
</div>

</body>
</html>