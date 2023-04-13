// WRITTEN BY OMAR

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8" />
    <meta name="author" content="Omar Maadarani" />
    <meta name="email" content="maad0009@algonquinlive.com" />
    <title>Lisitings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/99ef503066.js" crossorigin="anonymous"></script>
    <script type="module" src="../../js/viewUserListings.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../css/listings.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <?php include "../../php/navbar.php" ?>
    <div id="content">
        <h1>Your Listings</h1>
        <div class="container" id="listings">

        </div>
    </div>
    <?php include "../../php/footer.php"; ?>
</body>

</html>