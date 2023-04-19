
<!DOCTYPE html>
<html>
<head>
  <title>Banking</title>
  <?php require 'assets/autoloader.php'; ?>
  
  <?php require 'assets/function.php'; ?>
  
</head>
<body style="background-size: 100%" class="bg-gradient-seconday">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 <a class="navbar-brand" href="#">
    <img src="images/logo.png" style="object-fit:cover;object-position:center center" width="30" height="30" class="d-inline-block align-top" alt="">
   <!--  <i class="d-inline-block  fa fa-building fa-fw"></i> -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="mindex.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">  <a class="nav-link" href="maccounts">Accounts</a></li>
      <li class="nav-item ">  <a class="nav-link" href="maddnew">Add New Account</a></li>
      <li class="nav-item ">  <a class="nav-link" href="mfeedback.php">Feedback</a></li>
      <!-- <li class="nav-item ">  <a class="nav-link" href="transfer.php">Funds Transfer</a></li> -->
      <!-- <li class="nav-item ">  <a class="nav-link" href="profile.php">Profile</a></li> -->


    </ul>
    <?php include 'msideButton.php'; ?>
    
  </div>
</nav><br><br><br>
<div class="container">
<div class="card w-100 text-center shadowBlue">
  <div class="card-header">
    All accounts
  </div>
  <div class="card-body">
   <table class="table table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Holder Name</th>
      <th scope="col">Account No.</th>
      <th scope="col">Branch Name</th>
      <th scope="col">Current Balance</th>
      <th scope="col">Account type</th>
      <th scope="col">Contact</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    
      <tr>
        <th scope="row"></th>
        <td>vaibhav</td>
        <td>12344567</td>
        <td>xyz</td>
        <td>Rs1345.</td>
        <td>saving></td>
        <td>123455</td>
        <td>
          <a href="show.php?id=" class='btn btn-success btn-sm' data-toggle='tooltip' title="View More info">View</a>
          <a href="mnotice.php?id=" class='btn btn-primary btn-sm' data-toggle='tooltip' title="Send notice to this">Send Notice</a>
          <a href="mindex.php?delete=" class='btn btn-danger btn-sm' data-toggle='tooltip' title="Delete this account">Delete</a>
        </td>
        
      </tr>
    
  </tbody>
</table>
  <div class="card-footer text-muted">
    bnak
  </div>
</div>
</body>
</html>