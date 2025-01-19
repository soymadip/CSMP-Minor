<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <?php
      include 'config.php';
      include 'src/head.php';
    ?>
    <title>CSMP</title>
  </head>
  <body>
    <!-- import navbar -->
    <?php
      include 'src/navbar.php';
    ?>
    <!-- Main area -->
    <div
      class="container d-flex justify-content-center align-items-center vh-100"
    >
      <div
        class="row log d-flex justify-content-center align-items-center vh-40 py-4 px-4 border border-2 border-danger rounded-3"
      >
        <div class="col">
          <img
            class="d-block mr-5 mt-5"
            src="src/images/cts-logo.png"
            alt="CSMP"
            width="280"
          />
        </div>
        <div class="col">
          <form class="needs-validation" action="src/auth.php" method="POST">
            <h1 class="text-center mb-5">LOGIN</h1>
            <div class="mb-3">
              <label class="form-label">User Type</label><br />
              <select name="usertype" class="form-select" id="type" required>
                <option>Teacher</option>
                <option>Admin</option>
                <option>
                  URL:
                  <?php echo $hostUrl ?>
                </option>
                <option>
                  Root:
                  <?php echo $_SERVER['DOCUMENT_ROOT'] ?>
                </option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input
                required
                name="username"
                type="text"
                class="form-control"
                placeholder="Enter your username"
              />
              <div class="invalid-feedback">Please provide a valid zip.</div>
            </div>
            <div class="mb-5">
              <label class="form-label">Password</label>
              <input
                required
                name="password"
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter your password"
              />
            </div>

            <div class="d-grid">
              <input
                type="submit"
                class="btn btn-primary"
                value="Log in"
                title="Log in your account."
              />
              <pre class="text-center my-1">or</pre>
              <input
                type="submit"
                class="btn btn-success"
                value="Sign Up"
                title="Sign Up with Cridentials."
              />
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- import Bootstrap JS -->
    <script src="src/css/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
