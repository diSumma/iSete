<?php 
	include "..\phps\connnection.php";
	sess("db")->start();
	sess("db")->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Utenti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <h2>Gestione utenti</h2>
	<div class="table-responsive">          
	<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Credito</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>$result</td>
        <td>Pitt</td>
        <td>6.50fr</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<table> 
</body>
</html>