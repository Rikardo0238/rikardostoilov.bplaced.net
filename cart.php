<?php
    include("header.php");

    if ($_SESSION["email"] == "" || $_SESSION["password"] == "") {
        header("Location: login.php");
    }
?>

<div class="container-fluid">
		<a class="navbar-brand" href="#">Rikardo.ch</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link" href="index.php">Startseite</a>
				<a class="nav-link" href="sitemap.php">Sitemap</a>
				<a class="nav-link" href="profile.php">Profil</a>
			</div>
			<a class='btn btn-light' href='cart.php'>Einkaufswagen</a>
		</div>
	</div>
</nav>

<div class="container title text-center">
    <h3>Einkaufswagen</h3>
</div>

<div class="container belowtitle text-center">
    <p>Sehen sie sich Ihren Einkaufswagen an.</p>
</div>

<div class="container text-center">
    <p>Coming Soon</p>
</div>

<?php
    include("footer.php");
?>