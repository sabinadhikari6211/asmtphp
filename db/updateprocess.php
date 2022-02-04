
<?php

include('connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contactno'];
$id=$_POST['id'];


 if($name==''){
     $msg = "name is required";
 }elseif($contact == ''){
     $msg = "contact is required";
 }elseif($email == ''){
    $msg = "email is required";
}

$query = "UPDATE contact  SET name='$name',email='$email',contactno='$contact' WHERE id ='$id'";



if(mysqli_query($con,$query)){
    $msg="Updated";
}else{
    $msg= "error occured".mysqli_error($con);
    }

header('Location:../view.php?msg='.$msg);

?> 
