<?php
if(isset($_GET['ID'])){
include('db/connect.php');
$id =$_GET['ID'];
$query="SELECT * FROM contact WHERE ID='$id'";
$result= mysqli_query($con,$query);
$num_row= mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if ($num_row!=1){
    die("no record found with this id ");
}
}else{
    die("please pass the id to update ");
}


?>




<html>
    <head>
        <title>Contact form</title>
    <br>  <br>  <br> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="row">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <div class ="row">
                        <div class="col-6"><h5> Update Contact Form</h5></div>
                        <div class="col-6">
                            
                        </div>
                        </div>
                        
                        <hr/>
                        <form method="POST" action="db/updateprocess.php">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                                <input type="text" class="form-control" value="<?php echo $row['Name']; ?>" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Contact no</span>
                                <input type="text" class="form-control"  value="<?php echo $row['Contactno']; ?>"  name="contactno" placeholder="Contact no" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                                <input type="text" class="form-control" value="<?php echo $row['Email']; ?>" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <input type="hidden" name ="id" value ="<?php echo $id ;?>">
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>

                        <?php
                        if(isset($_GET['msg'])){ ?>
                        
                    <div class="alert alert-secondary" role="alert">
                        <?php echo $_GET['msg']; ?>
                        </div>
                    
                    <?php  }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>