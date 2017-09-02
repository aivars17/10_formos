<!DOCTYPE html>
<html>
<head>
	<title>Formos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<style>
		.flag {
			height: 40px;
			width: 30px;
			float: left;

		}
		.g {
			background-color: yellow;
		}
		.r {
			background-color: red;
		}
		.z {
			background-color: green;
		}
		.br {
			clear: both ;
		}
	</style>
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
					<option value="sum">Sudetis</option>
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
						if ($_POST['operation'] == 'sum') {
							echo	$_POST['arg1'] + $_POST['arg2'];

						} elseif ($_POST['operation'] == 'ded') {

							echo	$_POST['arg1'] - $_POST['arg2'];

						}	elseif ($_POST['operation'] == 'mult'){

							echo	$_POST['arg1'] * $_POST['arg2'];
							
							$c = $_POST['arg1'];
							$g = $_POST['arg2'];
								echo '<br>';
								for ($i=1; $i <= $c ; $i++) { 
									for ($b=1; $b <= $g ; $b++) { 
										echo '#';
									}
									echo '<br>';
								}

						}	elseif ($_POST['operation'] == 'div'){
							if ($_POST['arg2'] == '0'){
								echo "<div class='alert alert-success'>
 							 <strong>Negalima!</strong> Dalyba iš nulio negalima.
								</div>";
							}	else
							echo	$_POST['arg1'] / $_POST['arg2'];
						}
					
				}	else {
					echo "nieko nera";
				} 

					echo "<br>";
					$img = ["g","g","g","g","g","g","z","z","z","z","z","z","r","r","r","r","r","r"];

						$h = 1;
					foreach ($img as $flag) {
							echo '<div class="flag '.$flag.'"></div>';
							if ($h == 6) {
								$h = 1;
								echo "<div class='br'></div>";
							}	else {
								$h++;
							}
	
						}	
				
				?>
		</div>
	</div>
</div>
</body>
</html>