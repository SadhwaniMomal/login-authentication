<?php
    session_start();
    require "Classes/Database.php";
    require "Classes/User.php";
    $conn = Database::getdb();

    $success = "";
    $warning = " ";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];        
        $password = $_POST['password'];
        if(User::auth($conn , $email , $password)){
            $_SESSION['Logged_in'] = true;
            header("Location: admin.php");
            // $success = "Successfully login";
        }else{
            $warning = "Email & Password Incorrect";
        }

    }

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
    <div class="container" >
        <div class="row">
            <div class="col-md-6  border border-success shadow py-3 px-3 my-5 mx-5" >
                <h2 class="text-center my-3  mx-3 text-success ">Login Here!!!</h2>
                
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email"  placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password"  placeholder="*****">
                    </div>
                    <div class="mb-3">
                        <h4 class="text-success text-center"><?= $success ?> </h4>
                        <h4 class="text-danger text-center"><?= $warning ?> </h4>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-success" value="Login">
                    </div>
                  

                </form>
            </div>
        </div>
    </div>

    <!-- js CDN bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" ></script>
</body>
</html>