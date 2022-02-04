<?php

include('connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contactno'];
 $msg="";

 if($name==''){
     $msg = "name is required";
 }elseif($contact == ''){
     $msg = "contact is required";
 }elseif($email == ''){
    $msg = "email is required";
}

$query = "INSERT INTO contact(name,email,contactno) VALUES('$name','$email','$contact')";



if(mysqli_query($con,$query)){
    $msg="Inserted";
}else{
    $msg= "error occured".mysqli_error($con);
    }

header('Location:../form.php?msg='.$msg);

?>