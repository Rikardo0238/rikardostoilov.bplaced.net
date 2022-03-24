<?php
	include("header.php");

	$products = array(
		array("bilder/Babuskha.png", "Baba??", 4),
		array("bilder/green car.jpg", "Lambo", 560000),
		array("bilder/green man.png", "Ninaj Turtel", 21),
		array("bilder/Roblox.png", "Robux", 999),
		array("bilder/Seiten auf Null.png", "Haarschnit", 25),
		array("bilder/Round Bear.png", "Ausgang mit Agan", 35),
		array("bilder/supra gt4.jpg", "Supra GT4", 200000),
		array("bilder/The Weeknd.jpg", "Foto mit The Weeknd", 0),
		array("bilder/Trippler.png", "Reise nach Chernobyl", 10),
	)
?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link active" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="sitemap.php">Sitemap</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="profile.php">Profil</a>
			</li>
		</ul>
	</div>
	<?php
		if(isset($_SESSION["email"]) && isset($_SESSION["password"])) {
			echo "<a class='btn btn-outline-light' href='cart.php'>Einkaufswagen</a>";
		} else {
			echo "<a class='btn btn-outline-light' href='login.php'>Login</a>";
		}
	?>
</nav>

<div class="container title text-center">
	<h3>Willkommen zu meinem Online-Shop!</h3>
</div>

<div class="container belowtitle text-center">
	<p>Sieh dich ruhig um.</p>
</div>

<div class="container text-center">
	<div class="row justify-content-center">
		<?php 
			for($row = 0; $row < sizeof($products); $row++) {
				echo "
					<div class='col-auto mb-3'>
						<div class='card'>
							<a href='".$products[$row][0]."' target='_blank'><img class='card-img-top' src='".$products[$row][0]."'alt='Card image'></a>
							<div class='card-body'>
								<h5 class='card-title'>".$products[$row][1]."</h5>
								<p class='card-text'>".$products[$row][2]." Fr.</p>
								<button class='btn btn-dark'>In den Einkaufswagen</button>
							</div>
						</div>
					</div>";
			}
		?>
		

		<!-- <div class="col-auto mb-3">
			<div class="card">
				<img class="card-img-top" src="bilder/supra gt4.jpg" alt="Card image">
				<div class="card-body">
					<h5 class="card-title">Produkt</h5>
					<p class="card-text">Something about the product.</p>
					<button class="btn btn-dark">In den Einkaufswagen</button>
				</div>
			</div>
		</div>

		<div class="col-auto mb-3">
			<div class="card">
				<img class="card-img-top" src="bilder/supra gt4.jpg" alt="Card image">
				<div class="card-body">
					<h5 class="card-title">Produkt</h5>
					<p class="card-text">Something about the product.</p>
					<button class="btn btn-dark">In den Einkaufswagen</button>
				</div>
			</div>
		</div>

		<div class="col-auto mb-3">
			<div class="card">
				<img class="card-img-top" src="bilder/supra gt4.jpg" alt="Card image">
				<div class="card-body">
					<h5 class="card-title">Produkt</h5>
					<p class="card-text">Something about the product.</p>
					<button class="btn btn-dark">In den Einkaufswagen</button>
				</div>
			</div>
		</div>

		<div class="col-auto mb-3">
			<div class="card">
				<img class="card-img-top " src="bilder/supra gt4.jpg" alt="Card image">
				<div class="card-body">
					<h5 class="card-title">Produkt</h5>
					<p class="card-text">Something about the product.</p>
					<button class="btn btn-dark">In den Einkaufswagen</button>
				</div>
			</div>
		</div>

		<div class="col-auto mb-3">
			<div class="card">
				<img class="card-img-top " src="bilder/supra gt4.jpg" alt="Card image">
				<div class="card-body">
					<h5 class="card-title">Produkt</h5>
					<p class="card-text">Something about the product.</p>
					<button class="btn btn-dark">In den Einkaufswagen</button>
				</div>
			</div>
		</div> -->
	</div>
</div>

<?php
	include("footer.php");
?>