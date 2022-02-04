<?php
 include('connect.php');
if(isset($_GET['ID'])){
    $ID= $_GET['ID'];
    $query = "DELETE FROM contact where ID='$ID'";
    if(mysqli_query($con,$query)){
        $msg="deleted";
    }else{
     $msg ="error:".mysqli_error($conn);   
    }
}else{
  $msg= "no action";
}
header('Location:../view.php?msg='.$msg);
?>