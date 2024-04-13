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
            color: #5AAC4E;
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

        

        .btn:hover {
            background-position: right;
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: none;
        }

        .register_container {
            text-align: center;
        }

        .register_container {
            background-color:#4c9d42;
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

        .register-btn {
            background: #5AAC4E;
            color: #fff;
            text-transform: uppercase;
            padding: 15px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-btn:hover {
            background: #4c9d42;
        }

        .login-link {
            display: block;
            margin-top: 20px;
            color: white;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <form class="register_container" action="register_action.php" method="post">
        <div>
            <h4>Create an Account</h4>
            <div class="form_group">
                <label for="firstname">First name </label>
                <input type="text" id="firstname" name="firstname" required placeholder="Enter your first name, e.g John ">
            </div>
            <div class="form_group">
                <label for="lastname">Last name </label>
                <input type="text" id="lastname" name="lastname" required placeholder="Enter your last name, e.g Doe ">
            </div>
            <div class="form_group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email, e.g example@gmail.com">
            </div>
            <div class="form_group">
                <label for="password">Password<br>(Requirements:)</label>
                <ul style="margin-top: 5px;font-weight: bold;">
                    <li>At least one uppercase letter</li>
                    <li>At least one number</li>
                    <li>At least one symbol (@, $, !, %, *, ?, &)</li>
                    <li>Must be 8-15 characters long</li>
                </ul>
                <input type="password" id="password" name="password" placeholder="Enter your password" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$" title="Password must contain at least one uppercase letter, one number, one symbol, and be 8-15 characters long" required>
                <span class="show-password" onclick="showPassword('password')">Show</span>
            </div>
            <div class="form_group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
            </div>
            
            <button type="submit" class="register-btn" name="register-btn">Register</button>
            <a href="login.php" class="login-link">Already have an account? Login here</a>
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
