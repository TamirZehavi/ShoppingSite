<!-- Tamir Zehavi 308241298 
    Shit Abutbul 204710370 -->

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="jquery-3.5.1.js"></script>
    <script src="Scripts.js"></script>
    <link rel="Stylesheet" type="text/css" href="Stylesheet.css">
    <link rel="Stylesheet" type="text/css" href="Popup.css">
    <title>Tam's Store</title>
    <meta charset="utf-8">
</head>

<body>
    <div class="page_container">
        <?php
        require('./Header.php');
        require('./PopupCart.php');
        ?>
        <div class="content">
            <?php
            require('./MainSellsDynamic.php');
            require('./About.php');
            require('./Contact.php');
            require('./Footer.php');
            ?>
        </div>
    </div>

</body>

</html>