<?php 
//require controller

//Call controller to select all rooms in dufie




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register FlawlessPay</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h3>Welcome To FlawlessPay</h3>
              </div>
              <p class="login-card-description">Sign Up</p>
              <form action="register_process.php" method="POST">
                  <div class="form-group">
                    <label for="text" class="sr-only">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <label for="text" class="sr-only">Contact No.</label>
                    <input type="number" name="number" id="number" class="form-control" placeholder="XXX-XXXX-XXXX">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="passwordc" id="passwordc" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <label for="pet-select">Select Gender:</label>
                    <select name="gender" id="pet-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                  <input name="signup" id="signup" class="btn btn-block login-btn mb-4" type="submit" value="Signup">
                </form>
                <p class="login-card-footer-text">You have an account? <a href="login.php" class="text-reset">Sign In here</a></p>
                <nav class="login-card-footer-nav">
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
