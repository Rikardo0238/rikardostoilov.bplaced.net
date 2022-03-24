<?php
    include("header.php");

	if (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
        header("Location: profile.php");
	}
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
				<a class="nav-link" href="sitemap.php">Sitemap</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="profile.php">Profil</a>
			</li>
		</ul>
	</div>
	<a class='btn btn-light' href='login.php'>Login</a>
</nav>

<div class="container title text-center">
    <h3>Login</h3>
</div>

<div class="container belowtitle text-center">
    <p>Melde dich an.</p>
</div>

<div class="container d-flex justify-content-center">
	<form action="controller/validatelogin.php" method="post">
		<div class="form-group">
			<label for="email">E-Mail</label>
			<input type="email" class="form-control" name="email" placeholder="E-Mail Adresse eingeben" required>
			<small class="form-text text-muted">*Pflichtfeld</small>
		</div>
		<div class="form-group">
			<label for="password">Passwort</label>
			<input type="password" class="form-control" name="password" placeholder="Passwort eingeben" required>
			<small class="form-text text-muted">*Pflichtfeld</small>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-dark">Anmelden</button>
		</div>
	</form>
</div>

<?php
    include("footer.php");
?>