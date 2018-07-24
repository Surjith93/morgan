<!DOCTYPE html>
<html>
  <head>
    <title>New Entry</title>
    <?php include("database.php");?>
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/custom.css" rel="stylesheet">
    <script type="text/javascript">
    </script>
  </head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="">View Details</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-center ">
<div class="jumbotron">
<h2 class="newregheader">Registration Form for new Employees</h2>
<form class="padtop" action="insert.php" method="post">
  <div class="form-group">
    <label class="newreg">Enter Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="newregname">
  </div>
   <div class="form-group">
    <label class="newreg">Enter your EmailId</label>
    <input type="email" class="form-control" placeholder="Enter your Email" name="newregemail">
  </div>
  <div class="form-group">
    <label class="newreg">Your Jobtitle</label>
    <input type="text" class="form-control" placeholder="Enter your JobTitle" name="newregtitle">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</body>
</html>
