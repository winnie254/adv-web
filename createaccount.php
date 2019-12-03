<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pata Keja Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">PATA KEJA AGENCY</h2>
  
  
    <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="accounts.php">Accounts</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="userlogin.php">User LogIn</a>
        <a class="dropdown-item" href="adminlogin.php">Admin LogIn</a>
       </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact Us</a>
    </li>
    
     <li class="nav-item">
      <a class="nav-link active" href="createaccount.php">Create Account</a>
    </li>
  
  </ul>

</div>
<div id="all" style="background-color: #f8f8ff;">
<div class="container">
  <h2 style="text-align: center;font-family: monospace;">Register</h2>
  <h4 style="text-align: center;font-family: monospace;">Create your account.It's free and only takes a minute</h4>
  <div class="d-flex justify-content-center align-items-center container">
  <form action="/action_page.php">
    <div class="form-group">
     
      <input type="First name" class="form-control" id="First name" placeholder="First name" name="First name">
    </div>
    <div class="form-group">
      
      <input type="Last name" class="form-control" id="Last name" placeholder="Last name" name="Last name">
    </div>
     <div class="form-group">
      
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
     <div class="form-group">
      
      <input type="Password" class="form-control" id="Password" placeholder="Enter Password" name="Password">
    </div>
     <div class="form-group">
      
      <input type="Password" class="form-control" id="Password" placeholder="Confirm Password" name="Password">
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="I accept the terms of use and privacy policy"> I accept the terms of use and privacy policy
      </label>
    </div>
    <a href="accounts.php" class="btn btn-info" role="button">Register Now</a>
  </form>
</div>
</div><br>
</div>
<footer class="futc" style="background-color:  #1589ff;text-align: center;padding-bottom:45px;>
    <div class="footer-copyright text-center py-3">&copy 2019 Copyright. Pata Keja Agency. All rights reserved.
      
    </div>
  </footer>
</body>
</html>
