
<?php

    session_start();

    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin')
        {
            header('location: ../views/dashboard.php');
        }
    }

    include "../../init/connect.php";
    include "../../init/functions.php";

    include "../controllers/login-controller.php";

    
    
    
?>

<!doctype html>
<html lang="en" data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Cakeasy Bakeshop Admin | Login</title>


    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="../../assets/css/sign-in.css" rel="stylesheet">

    
    

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto text-center">
        <form method="post">
            <img class="" src="../../assets/img/cakeasy_logo.png" alt="" width="200" height="auto">
            <h1 class="h3 mb-3 fw-normal">Admin Login</h1>


            <?php

            if(!empty($errors))
            {
                if(!empty($errors['username']) or !empty($errors['pass']))
                {
                    echo '<div class="alert alert-danger">Incorrect Username and/or Password</div>';
                }
                else
                {
                    echo '<div class="alert alert-danger">Please Fill-in all Fields!</div>';
                }
            }

            ?>

            <div class="form-floating">
                <input type="text" value="<?=old_value('username')?>" name="username" class="form-control
                <?php
                    if(!empty($errors['username']))
                    {
                        echo $errors['username'];
                    }else { echo ""; }
                ?>
                " id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>

            <div class="form-floating">
                <input type="password" name="pass" class="form-control
                <?php
                    if(!empty($errors['pass']))
                    {
                        echo $errors['pass'];
                    }else { echo ""; }
                ?>" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            
            <button class="btn btn-primary w-100 py-2" type="submit" name="submit">Sign in</button>
                    

            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
        </form>
    </main>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>