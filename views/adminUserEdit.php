<?php
require_once('../controller/headerCookie.php');
require_once('../model/userModel.php');
$editUid =  $_GET['editUid'];
list($usertype, $username, $password, $email) = getUserById($editUid);
?>

<html>
<?php echo file_get_contents("html/header.html"); ?>

<head>

    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        #add-doc-delivery {
            position: relative;
            top: 250px;
            width: 100px;
            left: 500px;
            /* adjust this value to move the element up or down */
        }
    </style>

</head>




<?php echo file_get_contents("html/topMenu.html"); ?>
<?php echo file_get_contents("html/sideMenu.html"); ?>


<hr>

<!-- Content -->


<fieldset id="Edit User">
    <form method="POST" action="../controller/adminUserEditCheck.php">


        <form method="POST" action="../controller/adminUserEditCheck.php?editUid=<?= $editUid ?>">
            <fieldset>
                <legend>Edit User</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="<?= $username ?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="<?= $password ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        </td>

        </tr>
        </table>
    </form>
</fieldset>

<!--Footer-->
<?php echo file_get_contents("html/footer.html"); ?>

<?php echo file_get_contents("html/footer.html"); ?>

</body>

</html>