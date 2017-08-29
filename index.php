<!DOCTYPE html>
<html>
<head>
	<title>Formos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Formos</h1>
	<div class="row">
		<div class="col">
			<form method="POST">
				<input type="text" name="arg1">
				<input type="text" name="arg2">
				<select name="operation">
					<option value="sum">Sudedis</option>
					<option value="ded">Atimtis</option>
					<option value="mult">Daugyba</option>
					<option value="div">Dalyba</option>
				</select>
				<button>Go!</button>
			</form>
		</div>
		<div class="col">
			Rezultatas: <br/>
			<?php 
				if (isset($_POST['arg1']) && isset($_POST['arg2'])) {
					// atliekame veiksma kuris priklauo nuo $_POST['operation']
				}	else {
					echo "nieko nera";
				}
				?>
		</div>
	</div>
</div>
</body>
</html>