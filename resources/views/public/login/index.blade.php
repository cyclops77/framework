<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
   <!--  {{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}} -->
    <link rel="stylesheet" href="{{asset('login_style/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('login_style/css/style.css')}}">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="/postlogin" method="POST" class="signup-form">
                    	{{csrf_field()}}
                        <h2 class="form-title">Create account</h2>
                       
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="id" placeholder="Email"/>
                        </div>
                      
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                      
                       
                        <div class="form-group">
                            <!-- <input type="submit" name="Sign In" id="submit" class="form-submit" value="Sign In"/> -->
                            <button type="submit" id="submit" class="form-submit" value="Sign In">LOGIN</button>
                        </div>
                    </form>
                    <p class="signinhere">
                       dont have any account ? <a href="/pendaftaran-karyawan" class="loginhere-link">Sign Up Here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('login_style/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('login_style/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>