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
  <h2 style="text-align: center;font-family: monospace;">HOUSE RECORD</h2>
  <div class="d-flex justify-content-center align-items-center container">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="number">Number:</label>
      <input type="Number" class="form-control"  id="Number"  name="Number" required="">
    </div>
    <div class="form-group">
      <label for="size">Size:</label>
      <input type="size" class="form-control"  id="size"  name="size" required="">
    </div>
    <div>
    <label for="rent">Rent:</label>
      <input type="rent" class="form-control"  id="rent"  name="rent" required="">
    </div>
    <div>
    <label for="deposit">Deposit:</label>
      <input type="deposit" class="form-control" id="deposit"  name="deposit" required="">
    </div>
    <div>
    <label for="status">Status:</label>
      <input type="status" class="form-control" id="status"  name="status" required="">
    </div>
    <div>
    <label for="id">Occupant ID:</label>
      <input type="id" class="form-control" id="id"  name="id" required="">
    </div>
    <div>
    <label for="fname">First Name:</label>
      <input type="fname" class="form-control" id="fname"  name="fname" required="">
    </div>
    <div>
    <label for="lname">Last Name:</label>
      <input type="lname" class="form-control"  id="lname"  name="lname" required="">
    </div><br>
    
    <button type="save" class="btn btn-primary">Save</button>
    <button type="cancel" class="btn btn-primary">Cancel</button>
  </form>
</div>
</div>
</div>
</body>
</html>
