<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <div class="mycard">
            <div class="row">
                <div class="col-md-6">


                    <div class="myLeftCtn">
                        <form action="" class="myform text-center" id="Regform">
                            <header>Create new account</header>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="Username" id="username" required>
                                <div class="invalid-feedback"><small id="statusMsg1"></small></div>

                            </div>
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email"type="text"
                                id="email" required>
                                <div class="invalid-feedback"><small id="statusMsg2"></small></div>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-phone"></i>
                                <input class="myInput" placeholder="phn.no"type="tel" id="phone" required>
                                <div class="invalid-feedback"><small id="statusMsg3"></small></div>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" placeholder="Password" type="password" id="password" required>
                                <div class="invalid-feedback"><small id="statusMsg4"></small></div> 
                            </div>
                            <button type="submit" class="butt" onclick="addPpl()" id="signup" >CREATE ACCOUNT</button>
                            <div><span id="successMsg"></span></div>
                        </form>
                        <div><span id="successMsg"></span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myrightctn">
                        <div class="box">
                            <header>YOUR CHOICE AUTO RE-CONDITION</header>
                            <P>We are here to provide service.All brands of car available here.</P>
                            <img src="images/car.jpg" alt="">
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/ajaxreqs.js"></script>
</body>
</html>