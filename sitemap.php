<?php
	include("header.php");
?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="sitemap.php">Sitemap</a>
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
	<h3>Sitemap</h3>
</div>

<div class="container belowtitle text-center">
	<p>Behalte die Orientierung.</p>
</div>

<div class="container d-flex justify-content-center">
	<ul>
		<li><a href="index.php">Home</a></li>
		<!-- <ul>
			<li>Produkte in den Einkaufswagen</li>
		</ul> -->
		<li><a href="sitemap.php">Sitemap</a></li>
		<!-- <ul>
			<li>Komplette Seiten Navigation</li>
		</ul> -->
		<li><a href="cart.php">Einkaufswagen</a></li>
		<!-- <ul>
			<li>Produkte im Einkaufswagen</li>
		</ul> -->
		<li><a href="profile.php">Profil</a></li>
		<!-- <ul>
			<li>E-mail und Passwort</li>
		</ul> -->
		<li><a href="login.php">Login</a></li>
		<!-- <ul>
			<li>Anmelden</li>
		</ul> -->
	</ul>
</div>

<?php
	include("footer.php");
?>