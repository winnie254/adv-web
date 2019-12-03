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

<style type="text/css">
  #box{
    width: 1300px;
    height: 900px;
    background: url('images/victorian.jpg')no-repeat;
  }
</style>
  
</head>
<body>


<div class="container">
  <h2 class="text-center">PATA KEJA AGENCY</h2>
  
  
    <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link  dropdown-toggle active" data-toggle="dropdown" href="accounts.php">Accounts</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="userlogin.php">User LogIn</a>
        <a class="dropdown-item" href="adminlogin.php">Admin LogIn</a>
       </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact Us</a>
    </li>
    
     <li class="nav-item">
      <a class="nav-link" href="createaccount.php">Create Account</a>
    </li>
  
  </ul>

</div>

  <!--onclick button the background image will appear-->
  <button type="button" onclick="display()">Touch Me!</button>
  <div id="box" >
</div>
  <script type="text/javascript" >
    function display(){
     
    document.getElementById("box").style.backgroundSize="1300px 900px";
}
  </script>

<div>
<footer class="futc" style="background-color:  #1589ff;text-align: center;padding-bottom:45px;>
    <div class="footer-copyright text-center py-3">&copy 2019 Copyright. Pata Keja Agency. All rights reserved.
      
    </div>
  </footer>
</div>
</body>
</html>