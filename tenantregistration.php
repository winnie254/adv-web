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
<div id="all" style="background-color: #f8f8ff;">
<div class="container">
  <h2 style="text-align: center;font-family: monospace;">TENANT REGISTRATION</h2>
  <div class="d-flex justify-content-center align-items-center container">

    
  <form action="tregist.php" method="post"  >
    <div >
      <label for="Number">Id Number:</label>
      <input type="Number" class="form-control"  id="number"  name="number" value="" required=""/>
    </div>
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="fname" class="form-control" id="fname"  name="fname" value="" required=""/>
    </div>
    <div>
     <label for="lname">Last Name:</label>
      <input type="lname" class="form-control"  id="lname"  name="lname" value="" required=""/>
    </div>
    <div>
    <label for="pnumber">Phone Number:</label>
      <input type="pnumber" class="form-control" id="pnumber"  name="pnumber" value="" required=""/>
    </div>
    <div>
    <label for="date">Date Admitted:</label>
      <input type="date" class="form-control" id="date"  name="date" value="" required=""/>
    </div>
    <div>
    <label for="hno">House Number:</label>
      <input type="hno" class="form-control" id="hno"  name="hno" value="" required=""/>
    </div>
    
   <br>
    <button type="submit" class="btn btn-primary">Submit</button></a>
    <button type="cancel" class="btn btn-primary">Cancel</button></a>
  </form>

</div>
</div>
</div>

</body>

</html>
