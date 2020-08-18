<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Getting Started</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div c
    lass="container">
    <!-- ...................header File Included..............    -->
    <?php include 'header.php';?>

        <!-- Start: Login-Form-blue-Gradient -->
        <section>
            <div class="lgp-hd mx-auto">
                <h2 style="filter: brightness(200%) ;font-size: 55px;" class="mx-auto"><strong>Food Block</strong></h2>
                <h5 style="filter: grayscale(100%);" class="mx-auto"><strong>A easy way to get your Food</strong></h5>
            </div>
            <div class="container login-cont">
                <div class="row">
                    <div class="mx-auto login-col col-8"><i class="icon ion-lock-combination"></i>
                        <form class="login-form" method="post" action="#"> 
                            <div class="form-group"><input class="form-control form-control-lg lg-frc" type="text" required placeholder="Enter User ID"></div>
                            <div class="form-group"><input class="form-control form-control-lg lg-frc" type="password" required placeholder="Enter Password"></div>
                            <div class="form-group">
                                <button class="btn btn-light btn-lg w-100" type="submit"><strong>Login</strong></button>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-white">Don't have any account? <a href="createnewacc.php" class="text-light" type="submit"><strong>Create new account</strong></a></span>
                                <span class="text-white"> <a href="forgetpass.php" class="text-light" type="submit"><strong>Forget Password</strong></a> </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Login-Form-blue-Gradient -->
    </div>

</body>

</html>