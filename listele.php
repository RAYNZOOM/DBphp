<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kişiler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nabla&display=swap" rel="stylesheet">
	<style>*{font-style:"Nabla","sans-serif";}</style>
  </head>
  <body class="bg-warning">

  	<?php
  		include("baglanti.php");

  		$sorgu = "SELECT * FROM kullanicilar";
  		$cevap = mysqli_query($baglanti, $sorgu); 
  	?>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
		    <a class="navbar-brand" href="index.php">231109038</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link" href="index.php">Kaydol</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="listele.php">Listele</a>
		        </li>
		      </ul>
		    </div>
		</div>
	</nav>

	<div class="container mt-5 p-4 bg-success-subtle">
		<table class="table p-3">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">İsim</th>
		      <th scope="col">Soyisim</th>
		      <th scope="col">E-mail</th>
		      <th scope="col">Parola</th>
		      <th scope="col">Doğum Tarihi</th>
		      <th scope="col">Cinsiyet</th>
		    </tr>
		  </thead>
		  <tbody class="table-group-divider">
		  	<?php
		  		while ($row = mysqli_fetch_assoc($cevap))
		  		{
		  			echo "<tr>";
		  				echo "<th scope='row'>".$row['id']."</th>";
		  				echo "<td>".$row['isim']."</td>";
		  				echo "<td>".$row['soyisim']."</td>";
		  				echo "<td>".$row['email']."</td>";
		  				echo "<td>".$row['parola']."</td>";
		  				echo "<td>".$row['dtarih']."</td>";
		  				echo "<td>".$row['cinsiyet']."</td>";
		  			echo "</tr>";
		  		}
		  	?>
		  </tbody>
		</table>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>