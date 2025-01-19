<?php
include '../config.php';
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $hostUrl ?>">
      <img
        src="<?php echo $hostUrl ?>/src/images/cts-logo.png"
        alt="Logo"
        width="37"
        class="d-inline-block align-middle"
      />
      CSMP
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-center justify-content-lg-end text-center"
      id="navbarNavAltMarkup"
    >
      <div class="navbar-nav align-middle">
        <a class="nav-link" aria-current="page" href="<?php echo $hostUrl ?>">
          <i class="fas fa-home small-icon"></i>
          Home
        </a>
        <a class="nav-link" href="<?php echo $hostUrl ?>/src/about.php">
          <i class="fas fa-info-circle small-icon"></i>
          About
        </a>
        <a class="nav-link" href="#">
          <i class="fas fa-university small-icon"></i>
          Institute
        </a>
      </div>
    </div>
  </div>
</nav>