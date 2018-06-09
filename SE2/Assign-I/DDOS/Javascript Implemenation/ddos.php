<!DOCTYPE html>
<html>
<head>
	<title>DDOS Attack Simluation</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<div class="container" id="mix">
		<div class="col-md-6">

			<h1> Denial Of Service</h1>

			<form id="attack_form" method="post">
				<div class="form-group">
					<label for="host" > Host Target</label>
					<input type="text" class="form-control" placeholder="Enter Host U want to Attack" name="hosts" id="host">
					<label for="port">Port:</label>
					<input type="number" class="form-control" placeholder="Specify Port Here" name="port" id="port">
					<label for="packets"> Packets: </label>
					<input type="number" class="form-control" placeholder="Enter Packets to be Send" id="packets" name="packets">
					<label for='interval'> Interval: </label>
					<input type="number" class="form-control" placeholder="Enter Interval of Attack" id="interval" name="interval"><br>
					<input class="btn btn-danger" value="Attack" id="attack">
				</div>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>
