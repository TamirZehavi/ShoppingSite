<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="Stylesheet" type="text/css" href="Stylesheet.css">
    <link rel="Stylesheet" type="text/css" href="Purchase.css">
    <title>Tam's Store</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    require('./Header.php');
    ?>

    <div class="purchase_list">
        <div class="purchase_item">
            <div>Picture</div>
            <div>Title</div>
            <div>Qantity</div>
            <div>Price</div>
        </div>
        <?php
        $totalPrice = $_POST['totalPrice'];
        unset($_POST['totalPrice']);
        unset($_POST['page']);
        foreach ($_POST as $row) {
            echo
                '<div class="purchase_item">
                <img class="purchase_item_picture" src=' . $row[3] . ' alt="wolfie">
                <div class="purchase_item_title">' . $row[2] . '</div>
                <div class="purchase_item_quantity">' . $row[0] . '</div>
                <div class="purchase_item_price">' . $row[1] . '</div>
            </div>';
        }
        echo "<div class='purchase_item'>".$totalPrice."</div>";
        require('./Footer.php');
        ?>

    </div>

</body>

</html>