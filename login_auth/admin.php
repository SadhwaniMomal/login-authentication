<?php
    session_start();
    if(!$_SESSION['Logged_in'])
    {
        header("Location: login.php");
        die();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
    <div class="container">
        <div class="row h-100">
            <div class="col border border-success shadow py-3 px-3 my-5 h-50">
                <div class="mb-3 d-flex justify-content-evenly">
                <h2 class="text-center  text-success ">Admin Profile</h2>
                <a href="./logout.php" class="text-white bg-success text-decoration-none  rounded-2 p-2">Logout</a>
                </div>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control"  name="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email"  placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password"  placeholder="*****">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- js CDN bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" ></script>
</body>
</html>