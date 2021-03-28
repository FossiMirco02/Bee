<html>
	<body>
		<head>
			<link href="css.css" rel="stylesheet" type="text/css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		</head>
		<center>
			<br>
			<div class="blu">
				<p>
					<label><b>Manage Employees</b></label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<form action="api.php">
					<input type="submit" class="btn btn-danger" onclick="fdelete()"> <img src="meno.png" /> &nbsp; Cancella</input>&nbsp;&nbsp;
					
					<input type="submit" class="btn btn-success" onclick="fpost()"> <img src="piu.png" /> &nbsp; Aggiungi Nuovo Impiegato</input>
					</form>
				</p>
			
			</div>
			<div>
				<br>
				<table border="2" frame="hsides">
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Indirizzo</th>
						<th>Telefono</th>
						<th>Azioni</th>
						
					</tr>
					<tr>
						
					</tr>
				</table>
			</div>
		</center>
	</body>
</html>