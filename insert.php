
<?php
   include('newentry.php');
   $regemail=$_POST['newregemail'];
   $view="Select * from emp_details where email='$regemail'";
   $result=mysqli_query($con,$view);
     if(mysqli_num_rows($result)>0)
       {
         echo "<script>dbfail();</script>";
       }
     else
       {
         $regname=$_POST['newregname'];
   		 $regtitle=$_POST['newregtitle'];
   		 $regemail=$_POST['newregemail'];
   		 $view="INSERT INTO emp_details (name, jobtitle, email) VALUES ('$regname', '$regtitle', '$regemail')";
   		 if(mysqli_query($con,$view))
           {
       	     echo "<script>dbsuccess();</script>";
	 	   } 
   		 else
     	   {
       	     echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
     	   }
        }
?>

