<?php
inc
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="reviewitemscss.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <title>items review</title>

</head>


<body>
    <div class="body-content">
        <div class="items-wrapper">
            <div class="items">
                <table>
                    <tr>
                        <th>item</th>
                        <th>Name</th>
                        <th>price(Ghs)</th>
                        <th>quantity</th>
                        <th>sub-total</th>
                        <th>#</th>
                    </tr>


                    <?php
                    if (isset($_SESSION['succesmsg'])) {
                    ?>
                    <div class=""
                        style="background-color:#d4edda; color: red;font-weight: bold;padding-top: 0.5rem;text-align:center;height:2rem; width: 100%;position:absolute; top:0;">
                        <?php echo $_SESSION['succesmsg']; ?></div>
                    <?php
                        unset($_SESSION['succesmsg']);
                    }
                    $items = array();
                    if ($_SESSION['itemsadded']) {


                        // code...
                        foreach ($_SESSION['itemsadded'] as $value) {
                            // code...


                            $sql = "SELECT *FROM products WHERE id=" . $value;

                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    array_push($items, $row);
                                    $_SESSION['items'] = $items;
                                    // print_r($_SESSION['items']);

                        ?>
                    <tr>
                        <td><img src="<?php echo $row["Weight"]; ?>" alt="" style="width:5rem; height:5rem;"></td>
                        <td><?php echo $row["Name"]; ?></td>
                        <td> <span class="price"><?php echo $row["Price"]; ?></span> </td>
                        <td><input type="number" name="iquantity" value="" onchange="subtotal()" class="quantity"
                                id="<?php echo $row["Weight"]; ?>"></td>
                        <td><span id="itotal"><input type="text" name="iprice" value="0" class="itotal"><input
                                    type="hidden" name="iname" value="<?php echo $row["Name"]; ?>"></span></td>

                        <td><a href="logic.php?delete=<?php echo $row["id"]  ?>" class="delete-item">Delete</a>
                        </td>
                    </tr>


            </div>

        </div>

        <?php
                                }
                            }
                        }
                    }
?>

        </table>

        <div id="total">
            <span>Total: <small id="total-price"></small></span>
        </div>

        <?php

?>




    </div>
    <script src="reviewitems.js" charset="utf-8"></script>
</body>

</html>
<?php

?>