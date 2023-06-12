<?php
require_once('../controller/headerCookie.php');
?>

<html>

<?php echo file_get_contents("html/header.html"); ?>

<head>
    <title>Add User</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        #add-doc-delivery {
            position: relative;
            top: -450px;
            width: 100px;
            left: 500px;
            /* adjust this value to move the element up or down */
        }
    </style>
</head>

<body>
    <!-- Menu -->
    <?php echo file_get_contents("html/topMenu.html"); ?>
    <?php echo file_get_contents("html/sideMenu.html"); ?>

    <hr>

    <!-- Content -->
    <div id="add-doc-delivery">
        <form method="POST" action="../controller/addUserCheck.php">
            <fieldset>
                <fieldset>
                    <legend>Add New User</legend>
                    <table>
                        <tr>
                            <td>User Type</td>
                            <td>
                                <input type="radio" name="usertype" value="admin" required>Admin
                                <input type="radio" name="usertype" value="employee">employee
                                <br>
                                <input type="radio" name="usertype" value="customer">customer

                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" value=""></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" value=""></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" value=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Submit"></td>
                        </tr>
                    </table>
                </fieldset>
        </form>

    </div>

    <!-- Footer -->
    <?php echo file_get_contents("html/footer.html"); ?>

</body>


</html>