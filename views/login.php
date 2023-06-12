<html>
<?php echo file_get_contents("html/header.html"); ?>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="JS/login_logout.js"></script>
    <script src="JS/loginValidate.js"></script>
    <style type="text/css">
        body {
            background-image: linear-gradient(to bottom right, #eb3349, #f45c43);
        }
    </style>
</head>

<body>

    <section id="loginBody">
        <div id="loginBody_form">
            <h2>Login</h2>
            <form>
                <div class="login_radio">
                    <input type="radio" class="login_inputRadio" name="usertype" value="admin" required>Admin
                    <input type="radio" class="login_inputRadio" name="usertype" value="employee">Employee
                    <input type="radio" class="login_inputRadio" name="usertype" value="customer">Customer

                </div>
                <input type="text" name="username" id="inputUsername" class="login_inputField" placeholder="Username" value="">
                <input type="password" name="password" id="inputPassword" class="login_inputField" placeholder="Password" value="">
                <input type="button" name="login" onclick="ajaxLogin()" class="login_submitBtn" value="Login">


                <input type="button" name="signup" onclick="openSignup()" class="login_submitBtn" value="Registration">
            </form>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="JS\loginValidate.js"></script>

</body>

</html>