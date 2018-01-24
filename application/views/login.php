<!DOCTYPE html>
<html>
<head>
	<title>Login CC KRS 2017</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="container-fluid" style="margin-top: 150px; margin-left: 550px;">
	<h1>Login CC KRS 2017</h1>
		<form action="<?php echo base_url()."matkul_smt_genap/view_data" ?>" method="POST">
			<table class="table">
				<tr>
					<td class="col-sm-1"><label>Username</label></td>
					<td><input type="text" name="username" required=""></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" required=""></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" class="btn btn-primary">Log In</button></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>