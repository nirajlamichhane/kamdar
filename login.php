<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamdar -Login</title>
    <link rel="stylesheet" href="css/professinallregstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="containers">
        <div class="left__section__login col-lg-8" id="left">
            <div class="logo__section">
                <img src="images\kamdar22.png" id="logo" ><br>Kamdar
            </div>
            <div class="welcome__description">
                <h1 class="description__heading">Welcome</h1>
                <h2 class="login-regestration__heading">Don't have an Account?</h2>
                <a class="Login-reg__login" href="userreg.php">Register</a>
            </div>
        </div>
        <div class="right__section__login col-lg-4 my-auto" id="right">
            <div class=" loginBox card border-0 px-4 py-5 ">
                <div class="row mb-4 px-3">

                    <h6 class="mb-0 mr-4 mt-2" >In Future Sign in with</h6>
                    <div class="facebook text-center mr-3">
                        <div class="fa fa-facebook">

                        </div>
                    </div>
                    <div class="twitter text-center mr-3">
                        <div class="fa fa-twitter">

                        </div>
                    </div>
                    <div class="linkedin text-center mr-3">
                        <div class="fa fa-linkedin">

                        </div>
                    </div>
                    <div class="google text-center mr-3">
                        <div class="fa fa-google">

                        </div>
                    </div>
                </div>
                <div class="row px-3 mb-4">
                    <div class="line">

                    </div>
                    <small class="or text-center">Or</small>
                    <div class="line">

                    </div>
                </div>
                <form action="loginback.php" method="POST">
                <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Email Address</h6>
                    </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address" required>
                </div>
                <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Password</h6>
                    </label> <input type="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="row px-3 mb-4">

                    <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                </div>

                <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" name="login">Login</button> </div>
                <div class="row mb-4 px-3">
                    <small class="font-weight-bold">Don't have an account? <a class="text-success " href="userreg.php">Register</a>
                    </small>
                </div>
              
            </form>
            </div>
        </div>
</body>

</html>