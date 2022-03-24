<?php
    include("header.php");

    if ($_SESSION["email"] == "" || $_SESSION["password"] == "") {
        header("Location: login.php");
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
				<a class="nav-link active" href="profile.php">Profil</a>
			</li>
        </ul>
    </div>
    <a class='btn btn-outline-light' href='cart.php'>Einkaufswagen</a>
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