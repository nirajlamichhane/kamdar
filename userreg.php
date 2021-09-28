<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/professinallregstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


</head>

<body>

    <div class="containers">
        <div class="left__section">
            <div class="logo__section">
                <img src="images\kamdar22.png" id="logo" >
            </div>
            <div class="login-regestration__section">
                <h2 class="login-regestration__heading">Already have an Account?</h2>
                <a class="Login-reg" href="login.php">Login</a>
                <h2 class="login-regestration__heading">Register as Professional</h2>
                <a class="Login-reg" href="professionalregistration.php">Register</a>
            </div>
        </div>
        <div class="right__section">
            <div class="right__section__top">
                <h1 class="right__section__top__headingone">
                    Create an Account
                </h1>
                <h3 class="right__section__top__headingtwo">
                    as User
                </h3>
            </div>
            <form action="insertuser.php" method="POST" class="User__form " onsubmit="return matchpass()">
                <div class=" row register-form h-100">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="paraName text-left">Name</p>
                            <input type="text" class="form-control" placeholder="First Name *" name="first" value=""  required/>
                        </div>
                        <div class="form-group">
                            <p class="paraName text-left">Last Name</p>
                            <input type="text" class="form-control" placeholder="Last Name *" name="second" value="" required />
                        </div>
                        <div class="form-group">
                            <p class="paraName text-left">Password</p>
                            <input type="password" class="form-control" id="password"placeholder="Password *" name="pass" value=""  required/>
                        </div>
                        <div class="form-group">
                            <p class="paraName text-left">Confirm Password</p>
                            <input type="password" class="form-control" id="password2"placeholder="Confirm Password *" value=""  required/>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="paraName text-left">Email</p>
                            <input type="email" class="form-control" placeholder="Your Email *" value=""  name="email"required/>
                        </div>
                        <div class="form-group">
                            <div class="maxl text-left ">
                                <p class="paraName text-left">Gender</p>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="male" checked>
                                    <span> Male </span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female">
                                    <span>Female </span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="paraName text-left">phone number</p>
                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control"
                                placeholder="Your Phone *" value="" required />
                        </div>
                        <div class="form-group">
                            <p class="paraName text-left">Address</p>
                            <select class="form-control" required name="address">
                                <option class="hidden" selected disabled value="">Please select your location </option>
                                <option value="Hetauda"> Hetauda</option>
                                <option value="Kathmandu"> Kathmandu</option>
                                <option value="Lalitpur"> lalitpur</option>
                            </select>
                        </div>
                        
                        <input type="submit" class="btnRegister" value="Register" name="submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" >
    function matchpass(){
      var firstpassword=document.getElementById('password').value;
      var secondpassword=document.getElementById('password2').value; 
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("Password ramro sanga han ");  
return false;  
}  
 }

</script>
</body>

</html>