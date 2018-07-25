<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include("database.php");
      include('functions.php');
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Student Information System</title>
    <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
          <!-- Optional theme -->
          <link rel="stylesheet" href="css/bootstrap-theme.min.css"  crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="css/custom.css">
          <!-- Latest compiled and minified JavaScript -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </head>
  <body>
     <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
      <div class="row" class="">
<<<<<<< HEAD
        <table class="table twid" id="viewData">
          <tr >
=======

        <table class="table table-bordered twid" id="viewData">
          <tr class="success">
>>>>>>> 54493593954c0f631d982300893e180966002526
            <th>No</th>
            <th>Name</th>
            <th>JobTitle</th>
            <th>Email</th>
            <th>Edit/Delete</th>
          </tr>
        </table>
         <script type="text/javascript">viewdata();</script>
      </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Student Information</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="firstForm" onsubmit="return validateForm()">
              <div class="form-group">
                <input type="hidden" class="form-control" id="editId" placeholder="Name" name='editId'>
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name='name'>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">JobTitle</label>
                <input type="text" class="form-control" placeholder="Class" id="jobtitle" name='jobtitle'>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control"  placeholder="Mobile" id="email" name='email'>
              </div>
              <button type="submit" class="btn btn-default" name="submits" id="submitBtn" >Submit</button>
              <button type="submit" class="btn btn-default" name="delete" id="deleteBtn" style="visibility:hidden" >Delete</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>