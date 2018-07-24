<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
      <?php include("database.php");?>
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/custom.css" rel="stylesheet">
    <script type="text/javascript">
    </script>
  </head>
<body background="images/sos.png">
<div class="container text-center ">
  <div class="jumbotron">
    <h1>Welcome to Morgan Mckinley</h1>
      <p id="successmsg">Please login to our website</p>
      <form class="padtop" method="post" action="" id="contact-form">
        <div class="form-group">
           <label for="exampleInputEmail1">User Name</label>
           <input type="text" class="form-control" placeholder="Enter User name" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <button type="submit" class="btn btn-primary" name="login">Login</button>
       </div>
     </form>
  </div>
</div>
</body>   
</html>

<script type="text/javascript">
  function alertsuccess()
   {
     document.getElementById('successmsg').innerHTML+="<div class='alert alert-success' role='alert'><strong>Well done!</strong> login success.</div>";
     document.getElementById('successmsg').innerHTML+="<a href='home.php'><button class='btn btn-default' type='submit'>Click here to view your profile </button></a>";
   }
  function alertfailed()
   {
     document.getElementById('successmsg').innerHTML+="<div class='alert alert-danger' role='alert'>Please enter valid Username and Password!!!</div>";
   }
</script>

<?php 
  if(isset($_POST['login']))
    {
      $username=$_POST['name'];
      $pswd=$_POST['password'];
      $view="Select * from login";
      $result=mysqli_query($con,$view);
      $row=mysqli_fetch_array($result);
      if($username==$row[1]&&$pswd==$row[2])
        {
          echo "<script>alertsuccess();</script>";
        }
      else
        {
          echo "<script>alertfailed();</script>";
        }
     }
?>


