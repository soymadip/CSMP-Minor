<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <?php
        include '../config.php';
        include '../src/head.php';
      ?>
    <title>Admin | CSMP</title>
  </head>
  <body>
    <!-- import navbar -->
    <?php
        include '../src/navbar.php';
    ?>

    <!-- Main area -->
    <div
      class="container d-flex justify-content-center align-items-center vh-100"
    >
      <div class="text-center border border-2 border-danger rounded-3 p-4 abd">
        <div
          class="spinner-border text-warning m-4"
          style="width: 4rem; height: 4rem"
          role="status"
        ></div>
        <h2>Logging you in</h2>
      </div>
    </div>

    <!-- import Bootstrap JS -->
    <script src="../src/css/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
