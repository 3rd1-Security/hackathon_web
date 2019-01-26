<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration</title>

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- Styles -->
        <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
        <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
        <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/lib/helper.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        
        <style>
            .bg-primary .unix-login .container-fluid .row .col-lg-6 .login-content{
                border: 2px solid #000;
            }
        </style>
        
        
    </head>
    

    <body class="bg-primary">
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-content" style="margin: 0; padding: 0;">
                            <div class="login-logo" style="color: #000;font-size: 2.8em;">
                                Saksham Bharat
                            </div>
                            <div class="login-form">
                                <h4>Register to Administration</h4>
                                <form>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="Email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" id="password">
                                    </div>
                                    <div class="form-group">
                                        <label>Educational Qualification</label>
                                        <input type="text" class="form-control" placeholder="Educational Qualification" id="qualification">
                                    </div>
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <input type="text" class="form-control" placeholder="Occupation" id="occupation">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Category</label>
                                        <div class="container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" id="govt" value="">
                                            <label class="form-check-label" for="govt">Government Official</label>
                                        </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" id="investor" value="" checked="checked">
                                            <label class="form-check-label" for="investor">Investor</label>
                                        </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" id="aspirant" value="">
                                            <label class="form-check-label" for="aspirant">Aspirant</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="" checked="checked">
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="others" value="">
                                            <label class="form-check-label" for="female">Others</label>
                                        </div>
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label>Employment Status</label>
                                       <div class="container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="yes" value="" checked="checked">
                                            <label class="form-check-label" for="yes">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="no" value="">
                                            <label class="form-check-label" for="no">No</label>
                                        </div>
                                       </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Aim</label>
                                        <textarea class="form-control" id="aim" rows="3"></textarea>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Agree the terms and policy 
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" id="register">Register</button>
                                    <div class="social-login-content">
                                        <div class="social-button">
                                            <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Register with facebook</button>
                                            <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Register with twitter</button>
                                        </div>
                                    </div>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="page-login.html"> Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
        
        function isEmail(email) {
              var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
              return regex.test(email);
            }
       
            $("#register").click(function(e){
                e.preventDefault();
               var error="";
                    if($("#name").val()==""){
                        error+="Name is required.";
                    }
                    if($("#email").val()==""){
                        error+="Email is required.";
                    }
                    else{
                        if(isEmail($("#email").val())==false){
                            error+="Not valid address.";
                        }
                        else{
                            if($("#password").val()==""){
                                error+="Password is required.";
                            }
                        }
                    }
                    if($("#qualification").val()==""){
                        error+="Enter educational qualification.";
                    }
                
                    if(error!=""){
                        $("#err").html(error);
                        alert(error);
                    }else{
                        //$("#success").show();
                        //$("#err").hide();
                    }
                
            });
    
    </script>

    </body>
    
</html>
