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
<div id="allone" style="background-color: #f8f8ff;">
<div class="container">
  <h2 style="text-align: center;font-family: monospace;">User LogIn</h2>
  <h4 style="text-align: center;font-family: monospace;">LogIn to your account</h4>
  <div class="d-flex justify-content-center align-items-center container">
  <form method="POST" action="usersubmit.php" >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
      
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required="">
      
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> 
        Remember me
      </label>
    </div>
    <a href="ulogincontent.php" class="btn btn-info" role="button">Submit</a>
  </form>
</div>
</div>
</div>
</body>
</html>
