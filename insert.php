

<?php

 include('newentry.php');
 $regname=$_POST['newregname'];
 $regtitle=$_POST['newregtitle'];
 $regemail=$_POST['newregemail'];
      $view="INSERT INTO emp_details (name, jobtitle, email) VALUES ('$regname', '$regtitle', '$regemail')";
      //mysqli_query($con,$view);
    
    if(mysqli_query($con,$view))
      {
        echo "<script>regsuccess();</script>";
        //header('Location: newentry.php') ;
	  } 
    else
      {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
      }
?>

