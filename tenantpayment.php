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
  <h2 style="text-align: center;font-family: monospace;">TENANT PAYMENT</h2>
  <div class="d-flex justify-content-center align-items-center container">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="pno">Tenant Phone Number:</label>
      <input type="pno" class="form-control"  id="pno"  name="pno" required="">
    </div>
    <div class="form-group">
      <label for="tid">Tenant ID:</label>
      <input type="tid" class="form-control"  id="tid"  name="tid" required="">
    </div>
    <div>
    <label for="fname">First Name:</label>
      <input type="fname" class="form-control" id="fname"  name="fname" required="">
    </div>
    <div>
    <label for="lname">Last Name:</label>
      <input type="lname" class="form-control"  id="lname"  name="lname" required="">
    </div>
    <div>
    <label for="due">Amount Due:<p style="color: red">To be filled by the administrator*</p></label>
      <input type="due" class="form-control"  id="due"  name="due">
    </div><br>
     <div>
    <table>
      <tr><td>Mode of Payment: <select onclick="cal()">
          <option value="MPESA">MPESA</option>
          <option value="VISA">VISA</option> 
          <option value="CHEQUE">CHEQUE</option>
          <option value="CASH">CASH</option>
          <option value="MASTER CARD">MASTER CARD</option>
          </select></td></tr>
    </table>
    </div><br>
    <div>
    <label for="paid">Amount Paid:</label>
      <input type="paid" class="form-control" id="paid"  name="paid" required="">
    </div>
    <div>
    <label for="date">Date Paid:</label>
      <input type="date" class="form-control" id="date"  name="date" required="">
    </div>
    <div>
    <label for="arrear">Rent Arrears:<p style="color: red">To be filled by the administrator*</p></label>
      <input type="arrear" class="form-control" id="arrear"  name="arrear">
    </div>
    
    <br>
    
    <button type="save" class="btn btn-primary">Save</button>
    <button type="cancel" class="btn btn-primary">Cancel</button>
  </form>
</div>
</div>
</div>
</body>
</html>
