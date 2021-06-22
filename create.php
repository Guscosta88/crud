<?php
  include('add.php')
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <a class="navbar-brand" href="index.php">Add Employee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
      </div>
    </nav>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">Create</div>
              <div class="card-body">
                <form class="" action="add.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="LastName">Last Name</label>
                      <input type="text" class="form-control" name="LastName" placeholder="Enter Last Name" pattern="[A-Za-z]+$" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="FirstName">First Name</label>
                      <input type="text" class="form-control" name="FirstName" placeholder="Enter First Name" pattern="[A-Za-z]+$" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="BirthDate">Birth Date</label>
                      <input type="date" class="form-control" name="BirthDate" placeholder="Enter Birth Date" value="" required>
                      
                    </div>
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                      <input type="file" class="form-control" name="image" value="" required>
                      
                    </div>
                    <div class="form-group">
                      <label for="Notes">Message</label>
                      <textarea class="form-control" name="Notes" placeholder="Enter your message" pattern="[A-Za-z]+$" rows="4" cols="50" value="" required></textarea>
                      
                    </div>
                    <div class="form-group">
                      <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </body>
</html>


 