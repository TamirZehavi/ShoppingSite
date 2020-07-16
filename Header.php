<header class="store_header">
    <div class="left_section">
        <span class="store_title">My super awsome store!</span>

        <img id="cartImage" class="image" src="https://img.favpng.com/12/18/15/shopping-cart-icon-png-favpng-e5DiMUYLNYaTjdsibphFUCAxC.jpg" alt="cart">
    </div>

    <?php
    if(!isset($_POST['page']))
    {
        echo '<div class="right_section">
        <a class="right_nav" href="#MainSells">Home</a>
        <a class="right_nav" href="#About">About</a>
        <a class="right_nav" href="#Contact">Contact</a>
        </div>';
    }
    else
    {
        echo '<div class="right_section">
        <a class="right_nav" href="./Main.php" >Go Back To Main</a>
        </div>';
    }
    ?>

</header>