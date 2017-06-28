<!DOCTYPE html>
<html>
<head>
	<title>Postfix Calculator</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		.fix {
			position: relative;
			left: 25%;
		}
	</style>
</head>
<body>
	<center>
	<div class="row">
		<h1>Calculator</h1>
	</div>
	</center>
	<div class="row">
		<div class="fix col col-md-6 col-lg-6">
			<form action="results.php" method="post">
				<div class="form-group">
				  <label for="eqn1">Int1:</label>
				  <input type="text" required placeholder="e.g A" class="form-control" name="eqn1">
				</div>
				<div class="form-group">
				  <label for="eqn1">Int2:</label>
				  <input type="text" required placeholder="e.g B" class="form-control" name="eqn2">
				</div>
				<div class="form-group">
				  <label for="eqn1">Operator:</label>
				  <input type="text" required placeholder="e.g +" class="form-control" name="operator">
				</div>
				<input type="submit" class="btn btn-primary" value="Submit">
			</form>
		</div>
	</div>

	<?php
		// get answer
		if(!is_string($_GET["answer"])) {
			echo "The operation result is: " . $_GET["answer"];
		} else {
			echo $_GET["answer"];
		}
	?>
</body>
</html>