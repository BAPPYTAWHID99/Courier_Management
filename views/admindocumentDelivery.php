<?php
require_once('../controller/headerCookie.php');
?>

<html>
<?php echo file_get_contents("html/header.html"); ?>

<head>
    <title>Document Delivery</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!--Top Menu-->
    <?php echo file_get_contents("html/topMenu.html"); ?>

    <section id="body">
        <?php echo file_get_contents("html/sideMenu.html"); ?>
        <!---------------------------------------------------------------------------------------------------------------------------------------Content----------------------------------------------------------------------------------------------------------------------------------------------->
        <div id="content">
            <div id="documentDelivery">
                <h2>Document Delivery</h2>
                <div id="documentDelivery_table">
                    <table>
                        <tr>
                            <th class="documentDelivery_table_c1">Date</th>
                            <th class="documentDelivery_table_c2">companyName</th>
                            <th class="documentDelivery_table_c3">address</th>
                            <th class="documentDelivery_table_c4">Action</th>
                        </tr>
                        <!--Show Notice--------------------------------------------------------------->
                        <?php
                        require('../model/userModel.php');
                        $result = getAllDoc();

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td class="documentDelivery_table_c1"><?php echo $row["date"]; ?></td>
                                    <td class="documentDelivery_table_c2"><?php echo $row["companyName"]; ?></td>
                                    <td class="documentDelivery_table_c3"><?php echo $row["address"]; ?></td>
                                    <td class="documentDelivery_table_c4"><a class="documentDelivery_table_c4_a" href="../controller/admindocumentDeliveryDelete.php?documentDeliveryid=<?= $row["id"] ?>">Delete</a></td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                    </table>
                    <?php
                    if (isset($_GET['delmsg'])) {
                        $delmsg = $_GET['delmsg'];
                        if ($delmsg == "success") {
                    ?>
                            <p class="documentDelivery_msg" style="color:green;">Document Delivery Successfully Deleted</p>
                        <?php
                        } else {
                        ?>
                            <p class="documentDelivery_msg" style="color:red;">Document Delivery Not Deleted</p>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <?php echo file_get_contents("html/footer.html"); ?>
</body>

</html>