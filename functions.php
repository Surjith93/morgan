<script type="text/javascript">
function viewdata(){
    <?php 
    	$view="Select * from emp_details order by id";
        $result=mysqli_query($con,$view);
        $p=0;
        while($row=mysqli_fetch_array($result)){
            for($i=0;$i<4;$i++)
            {
        	  $arr[$p][$i]=$row[$i];
            }
            $p++;
        }
    ?>
	var users=<?php echo json_encode($arr);?>;
    
    users.forEach(function(item){
        document.getElementById('viewData').innerHTML+="<tr id='clear'><td>"+item[0]+"</td><td>"+item[1]+"</td><td>"+item[2]+"</td><td>"+item[3]+
        "</td><td><button type='button' class='btn btn-default' data-dismiss='modal'  data-target='#myModal' value="+item+
        " data-toggle='modal' onclick='editDelete(this.value)'>Edit/Delete</button></td></tr>";
    })
  }
function editDelete(i){
    var res = i.split(",");
    document.getElementById('editId').value=res[0];
    document.getElementById('name').value=res[1];
    document.getElementById('jobtitle').value=res[2];
    document.getElementById('email').value=res[3];
    document.getElementById('submitBtn').name="editSubmit";
    document.getElementById('deleteBtn').style.visibility="visible";
}
function validateForm() {
    if (document.forms["firstForm"]["name"].value == "") {
        document.getElementById('myform').innerHTML="<p class='alert alert-danger' role='alert'>Enter Nme !</p>";
        return false;
    }
    if (document.forms["firstForm"]["jobtitle"].value == "") {
        document.getElementById('myform').innerHTML="<p class='alert alert-danger' role='alert'>Enter Jobtitle !</p>";
        return false;
    }
    if (document.forms["firstForm"]["email"].value == "") {
        document.getElementById('myform').innerHTML="<p class='alert alert-danger' role='alert'>Enter Email !</p>";
        return false;
        
    }

}
</script>
<?php
 if(isset($_POST['editSubmit'])){
      $i=$_POST['editId'];
      $name=$_POST['name'];
      $jobtitle=$_POST['jobtitle'];
      $email=$_POST['email'];
      $qry="UPDATE emp_details SET name='$name',jobtitle='$jobtitle',email='$email' WHERE id=$i";
      $result = mysqli_query($con,$qry)
                or die("Error: ".mysqli_error());
      header('location:view_details.php');
      
    }
    if(isset($_POST['delete'])){
    $i=$_POST['editId'];
    $qry="delete from emp_details where id=$i";
    $result = mysqli_query($con,$qry)
                or die("Error: ".mysqli_error());
    echo "<script>document.getElementById('deleteBtn').style.visibility='hidden';window.location='firstpage.php';</script>";
     header('location:view_details.php');
    }

?>