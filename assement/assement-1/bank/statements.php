
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
        <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">  <a class="nav-link" href="accounts.php">Accounts</a></li>
      <li class="nav-item active">  <a class="nav-link" href="statements.php">Account Statements</a></li>
      <li class="nav-item ">  <a class="nav-link" href="transfer.php">Funds Transfer</a></li>
      <!-- <li class="nav-item ">  <a class="nav-link" href="profile.php">Profile</a></li> -->


    </ul>
    <?php include 'sideButton.php'; ?>
  </div>
</nav><br><br><br>
<div class="container">
  <div class="card  w-75 mx-auto">
  <div class="card-header text-center">
    Transaction made against you account
  </div>
  <div class="card-body">
    <div id="list-group rounded-0">
   
              <div class='list-group-item alert alert-secondary'>You withdraw Rs.$row[debit] from your account at $row[date]</div>
            
        
            <div class='list-group-item alert alert-success'>You deposit Rs.$row[credit] in your account at $row[date]</div>
            
               <div class='list-group-item alert alert-danger'>Deduction have been made for  Rs.$row[debit] from your account at $row[date] in case of $row[other]</div>
            
            
            
             <div class='list-group-item alert alert-warning'>Transfer have been made for  Rs.$row[debit] from your account at $row[date] in  account no.$row[other]</div>
             <div class='text-center'><small class='text-muted'><i>No Transcaction has been made yet.</i></small></div>
      
  </div>
  </div>
  <div class="card-footer text-muted">
    bankname 
  </div>
</div>

</div>
</body>
</html>