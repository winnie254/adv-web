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
    .column{
     float: left;
     padding:5px; 
    }

    .columnone{
      float: left;
      
      padding: 5px;
    }
    /*clearfix (clear floats)*/
    .rowone::after{
      content: "";
      clear: both;
      display: table;
    }
    .columntwo{
      float: left;
      
      padding: 9px;
    }
    .rowtwo::after{
      content: "";
      clear: both;
      display: table;
    }
    .columnthree{
      float: left;
      
      padding: 9px;
    }
    .rowthree::after{
      content: "";
      clear: both;
      display: table;
    }
    #headcorner{
      border-radius: 20px;
      background: url('images/patternblue.jpg');
      background-position: center;
      background-repeat: repeat;
      padding:20px 20px 20px 20px;
      width: 290px;
      height: 50px;
      
    }
    .row{
      background-color: #b0e0e6;
      height: 200px;

    }
    #wrap{
      background-color: #f8f8ff;
    }
  </style>
</head>
<body>


<div class="container">
  <h2 class="text-center">PATA KEJA AGENCY</h2>
  
  
    <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" href="home.php">Home</a>
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
      <a class="nav-link" href="createaccount.php">Create Account</a>
    </li>
  
  </ul>

</div>

  <div class="row">
    <div class="column">
 
   <img src="images/hesby.png" alt=" " /><span>Hesby</span>
 </div>
 <div class="column">
   <img src="images/lamadi.png" alt="" width="290" height="169" /><span>Lamadi</span>
 </div>
 
 </div>
<div id="wrap">
<h6 id="headcorner" style="text-align: center;">New Listings</h6>
 
  <div class="rowone">
    
    <div class="columnone">
      
         <img src="images/vipingo.png" alt=" " width="200" height="150" /><span>Vipingo</span>
       </div>
       <div class="columnone">
         <img src="images/kelvin.png" alt="" width="200" height="150"  /><span>Kelvin</span>
       </div>
       <div class="columnone">
        <img src="images/four points.png" alt="" width="200" height="150" /><span>Tulip</span>
      </div>
    </div>
    <div class="rowtwo">
      <div class="columntwo">
         <img src="images/elitess.jpg" alt=" " width="200" height="150" /><span>Elitess</span>
       </div>
       <div class="columntwo">
         <img src="images/crayfawl.jpg" alt="" width="200" height="150" /><span>Crawll</span>
       </div>
       <div class="columntwo">
       <img src="images/baskville.jpg" alt="" width="200" height="150" /><span>Bask</span>
     </div>
   </div>
   <div class="rowthree">
     <div class="columnthree">
        <img src="images/forestway.jpg" alt=" " width="200" height="150" /><span>Forest</span>
      </div>
      <div class="columnthree">
         <img src="images/kingsly.jpg" alt="" width="200" height="150" /><span>Kingly</span>
       </div>
         <div class="columnthree">
        <img src="images/lavat.jpg" alt="" width="200" height="150" /><span>Lavat</span>
      </div>
     </div>
    
  

<p style="color: #1589ff;">We manage different apartments in different areas. Feel free to enquire on the apartments and choose the one that fits your liking.</p>
</div>
  <footer class="futc" style="background-color: #1589ff;text-align: center;padding-bottom:45px;>
    <div class="footer-copyright text-center py-3">&copy 2019 Copyright. Pata Keja Agency. All rights reserved.
      
    </div>
  </footer>

</body>
</html>
