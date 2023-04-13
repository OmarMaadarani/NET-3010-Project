<!-- Justin Franko inspiration: https://www.bootdey.com/snippets/view/profile-with-data-and-skills-->
<?php
session_start();
require_once "../../db/db_getters.php";

$user = get_user_by_id($_SESSION["userID"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UFT-8" />
  <meta name="author" content="Omar Maadarani" />
  <meta name="email" content="maad0009@algonquinlive.com" />
  <title>About Me</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/99ef503066.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../../css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
  <?php include "../../php/navbar.php"; ?>
  <div id="content">
    <h1>User Info</h1>

    <div class="container">

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="../../imgs/head.jpg" alt="pic" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4><?php echo $user["username"]; ?></h4>
                  <p class="text-secondary mb-1">AutoBid User</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $user["username"]; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $user["email"]; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  unknown
                </div>
              </div>
              <hr>
            </div>
          </div>

        </div>
      </div>


    </div>
  </div>
  <?php include "../../php/footer.php"; ?>

  </div>

</body>

</html>
