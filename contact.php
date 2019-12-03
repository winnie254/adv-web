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
      <a class="nav-link active" href="contact.php">Contact Us</a>
    </li>
    
     <li class="nav-item">
      <a class="nav-link" href="createaccount.php">Create Account</a>
    </li>
  
  </ul>

</div>
<div id="allround" style="background-color: #f8f8ff;">
<div id="form-wrapper" style="max-width: 500px;margin-right: auto;overflow: hidden; padding-left: 50px;">
  <h2 style="font-family: monospace;">Contact Us:</h2>
<h3 style="font-family: monospace;">Feel free do contact us incase of anything.Thank You.</h3> 
  <form action="/action_page.php" >
     <div class="input-group mb-3">
    <div class="input-group-prepend">
     <span class="input-group-text">Name</span>
   </div>
      <input type="text" class="form-control" placeholder="First name"  >
       <input type="text" class="form-control" placeholder="Last name"  >
    </div>
    <div class="form-group">
      
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
      
    </div>
    <div class="form-group">
      <select name="subject" class="custom-select">
        <option selected>Subject</option>
        <option value="Complain">Complain</option>
        <option value="Enquiry">Enquiry</option>
      </select>
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="6" id="comment"></textarea>
    </div><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<div id="details-wrapper" style="text-align: right; padding-right: 100px;overflow: hidden;margin-top: 50px;">
  <h4 style="font-family: monospace;">Contact Details </h4>
 
 <ul style="list-style-type: none;">
            <li>Location:Acacia Park(Ongata Rongai)</li>
            
            <li>Office Phone Number:+254 0718985704</li>
            <li>Fax Number:(254) 232-4160</li>
            <li>Email:patakej534@gmail.com</li>
            <li>Website:www.patakejaagency.com</li>
          </ul>

</div>
</div>
<div class="footer">

<footer class="futc" style="background-color:  #1589ff;text-align: center;padding-bottom:35px;">
    <div class="footer-copyright text-center  py-3">&copy 2019 Copyright. Pata Keja Agency. All rights reserved.
      
    </div>
  </footer>
</div>
</body>
</html>