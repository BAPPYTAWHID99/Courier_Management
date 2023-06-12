<?php
require_once('../controller/headerCookie.php');
?>

<html>
<?php echo file_get_contents("html/header.html"); ?>

<head>
    <title>Add Document Delivery</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        #add-doc-delivery {
            position: relative;
            top: 150px;
            width: 100px;
            left: 300px;
            /* adjust this value to move the element up or down */
        }
    </style>
</head>


<?php echo file_get_contents("html/topMenu.html"); ?>
<?php echo file_get_contents("html/sideMenu.html"); ?>


<hr>

<!-- Content -->

<fieldset id="add-doc-delivery">
    <legend>AdddocumentDelivery</legend>
    <form method="POST" action="../controller/adddocumentDeliveryCheck.php">
        <table>
            <tr>
                <td>Date</td>
                <td>
                    <input type="date" name="date" value="">
                </td>
            </tr>
            <tr>
                <td>companyName</td>
                <td><input type="text" name="companyName" value=""></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</fieldset>


<!--Footer-->
<?php echo file_get_contents("html/footer.html"); ?>

</body>

</html>