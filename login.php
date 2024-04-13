<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WellnessNest</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">


    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Inline CSS */

        /* Apply font family and font weight to body */
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: normal;
            font-style: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            color: #000; 
            margin-top: 0px;
            font-style: normal;
            font-weight: 500;
            text-transform: normal;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 30px;
            margin-bottom: 15px;
            font-weight: normal;
        }

        .bg-img-1 {
            background-image: url(../img/slider/slider-img-1.jpg);
        }

        .bg-img-2 {
            background-image: url(../img/background-img/bg-img-2.jpg);
        }

        .cta-bg-1 {
            background-image: url(../img/background-img/bg-img-3.jpg);
        }

        .img {
            max-width: 100%;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }

        .fix {
            overflow: hidden;
        }

        .clear {
            clear: both;
        }

        a,
        .button {
            color: #fff;
            transition: all 0.3s;
        }

        a:hover {
            color: #fff;
        }

        a:focus,
        a:hover,
        .portfolio-cat a:hover,
        .footer-menu li a:hover {
            text-decoration: none;
        }

        .btn {
            background: #5AAC4E;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            padding: 28px 22px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: 400;
            line-height: 1;
            border: 2px solid #fff;
            border-radius: 0 0 0 17px;
            letter-spacing: 1px;
            margin: 10px;
            transition: color 0.4s linear;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .btn::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 101%;
            height: 101%;
            background: #5AAC4E;
            z-index: 1;
            border-radius: 5px;
            transition: transform 0.5s;
            transition-timing-function: ease;
            transform-origin: 0 0;
            transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
            transform: scaleX(0);
        }

        .btn:hover::before {
            transform: scaleX(1);
        }

        .btn:hover {
            background-position: right;
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: none;
        }

        .login_container {
            text-align: center;
        }

        .login_container {
            background-color:#5AAC4E;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
        }

        .form_group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form_group label {
            display: block;
            margin-bottom: 5px;
        }

        .form_group input[type="text"],
        .form_group input[type="email"],
        .form_group input[type="password"] {
            width: 350px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .show-password {
            cursor: pointer;
        }

        .form_group input[type="radio"] {
            margin-right: 5px;
        }

        .login-btn {
            background: #5AAC4E;
            color: #fff;
            text-transform: uppercase;
            padding: 15px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-btn:hover {
            background: #4c9d42;
        }

        .login-link {
            display: block;
            margin-top: 20px;
            color: #5AAC4E;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<div class="slider-area slider-area2">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider  d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                             <div class="hero-wrapper">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Welcome!</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Welcome To WellnessNest, your mental health partner</p>
                                 
<form  class="login_container" action="login_action.php" method="get">
        <div>
            <h4>Sign in to your Account</h4>
            <div class="form_group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email, e.g example@gmail.com">
            </div>
            <div class="form_group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$"required>
                <span class="show-password" onclick="showPassword('password')">Show</span>
            </div>
            
            <button type="submit" class="login-btn" name = "login_form">Log In</button><br />
            <a href="register.php" class="register-link">Don't have an account? Sign Up here</a>
        </div>
    </form>
    <script>
        function showPassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>

    
</body>

</html>



































