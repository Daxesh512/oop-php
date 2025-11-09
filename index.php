<?php 
require_once 'header/header.php';
require_once '../1-project/classes/register.php';

$re = new Register();

if($_SERVER['REQUEST_METHOD']=="POST"){
    $register = $re->addRegister($_POST,$_FILES);
}


?>
  //MR.Web Master

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header">
                    <h1>Student Register Form</h1>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                        <label for="">Phone</label>
                        <input type="number" name="phone" placeholder="Enter Your Phone Number" class="form-control">
                        <label for="">Photo</label>
                        <input type="file" name="photo" placeholder="Enter Your Photo" class="form-control">
                        <label for="">Address</label>
                        <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea><br>
                        <input type="submit" value="Register" class="btn btn-primary form-control">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once 'footer/footer.php';  ?>
