<?php
$items = array(
    "item0"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1585596102/1585596102.cybercortex_27_33_20.jpg",
        "title"=>"Grey Wolf",
        "price"=>"24.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item1"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1564334192/1564334192.cybercortex_1542037375.sunlion001_whatsapp_prof.png",
        "title"=>"Beach Lion",
        "price"=>"29.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item2"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1564334073/1564334073.cybercortex__c__foxpace_by_cybercortex_dcfzkvt-fullview.png",
        "title"=>"Space Fox",
        "price"=>"35.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item3"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1563999210/1563999210.cybercortex_1518109684.sunlion001_tounge_v_2.png",
        "title"=>"Forest Dog",
        "price"=>"18.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item4"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1563998325/1563998325.cybercortex_1516027270.sunlion001_roxy1.png",
        "title"=>"[C] Blue",
        "price"=>"15.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item5"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1564001260/1564001260.cybercortex_1525707829.sunlion001_deer_wolf_com_fb.png",
        "title"=>"Enchanted Red Deer",
        "price"=>"22.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item6"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1563998564/1563998564.cybercortex_1516472927.sunlion001_blue_wolf_comm.png",
        "title"=>"Blue Wolf(Rare)",
        "price"=>"44.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item7"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1563998270/1563998270.cybercortex_1515960116.sunlion001_roxy.png",
        "title"=>"[C] Red",
        "price"=>"15.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item8"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1563997228/1563997228.cybercortex_1512238362.sunlion001_roxy_2.png",
        "title"=>"[C] Kim",
        "price"=>"15.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
    "item9"=>array(
        "pictureURL"=>"https://d.facdn.net/art/cybercortex/1563997185/1563997185.cybercortex_1512002227.sunlion001_roxy_1.png",
        "title"=>"[C] Chase",
        "price"=>"15.99$",
        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid commodi ducimus unde enim accusantium exercitationem fugiat dolorum. Nobis adipisci eveniet eligendi reiciendis nisi laudantium fugit odio unde. Odio, dolores
        sequi?"
    ),
);
?>

<section class="MainSells">
    <div>
        <h3 id="MainSells">Animal Art Planet!</h3>
    </div>
    <div class="item_grid">
        <?php
        foreach($items as $row)
        {
            echo "<div class='item'>
            <div class='item_picture'>
                <img class='item_picture' src=".$row["pictureURL"]." alt='wolfie'>
            </div>
            <div class='title'>".$row["title"]."</div>
            <div class='price'>".$row["price"]."</div>
            <div class='item_description'>
                <p class='item_description'>
                ".$row["description"]."
                </p>
            </div>
            <div class='add_to_cart'>
                <button class='add_to_cart_button'>Add To Cart</button>
            </div>
        </div>";
        };
        ?>
    </div>
</section>


        