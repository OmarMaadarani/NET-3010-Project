<?php
// FUnction called to process whether if the last nav item should be a Login link (Default) or Dropdown link (For Signed in Users )
function lastItem()
{
	if (isset($_SESSION["username"])) {
		echo '<li class="nav-item dropdown main">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="nav-drop">' . $_SESSION["username"] . '</a>
			<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="/NET-3010-Project/Pages/User/userinfo.php">Profile</a></li>
			<li><a class="dropdown-item" href="/NET-3010-Project/Pages/User/listings.php">Listings</a></li>
			<li><a class="dropdown-item" href="/NET-3010-Project/php/logout.php">Logout</a></li>
			</ul>
		</li>
		';
	} else {
		echo '<li class="nav-item" id="login-item">
				<a class="nav-link main" href="/NET-3010-Project/Pages/login.php">Login</a>
			</li>';
	}
}
?>

<nav class="navbar navbar-expand-md">
	<!-- Brand -->
	<a class="navbar-brand" href="/NET-3010-Project/">AutoBid Trader</a>
	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Navbar links -->
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link main" href="/NET-3010-Project/">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link main" href="/NET-3010-Project/Pages/buy.php">Buy Car</a>
			</li>
			<?php if (isset($_SESSION["userID"])) { ?>
				<li class="nav-item">
					<a class="nav-link main" href="/NET-3010-Project/Pages/sell.php">Sell Your Car</a>
				</li>
			<?php } ?>
			<li class="nav-item">
				<a class="nav-link" href="/NET-3010-Project/Pages/contact.php">Contact Us</a>
			</li>
		</ul>
	</div>
	<div class="collapse navbar-collapse justify-content-end" id="navbar-end">
		<ul class="navbar-nav">
			<?php lastItem() ?>
		</ul>
	</div>
</nav>