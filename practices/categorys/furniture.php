<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <?php include '../header/navbar.php'; ?>
    <div class="container">
        
        <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
            <input type="hidden" name="type_category" value="furniture">
            <div class="item-img">
                <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZnVybml0dXJlfGVufDB8fDB8fHww"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">51500</p>
                <p id="item_title" class="item_title" name="item_title">Office furniture. Bookshelf,Chairs</p>
                <input type="hidden" name="item_title" value="Office furniture. Bookshelf,Chairs">
                <input type="hidden" name="price" value="51500">
                <input type="hidden" name="img"
                    value="https://images.unsplash.com/photo-1524758631624-e2822e304c36?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZnVybml0dXJlfGVufDB8fDB8fHww">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
    </form>

    <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
    <input type="hidden" name="type_category" value="furniture">
            <div class="item-img">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbmnQ2EcMl5p0JmvA3IGk_oQBjayLp1xUMMA&s"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">27000</p>
                <p id="item_title" class="item_title" name="item_title">Party furniture. In Party,club,and etc. using furniture.</p>
                <input type="hidden" name="item_title" value="Party furniture. In Party,club,and etc. using furniture.">
                <input type="hidden" name="price" value="27000">
                <input type="hidden" name="img"
                    value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbmnQ2EcMl5p0JmvA3IGk_oQBjayLp1xUMMA&s">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
    </form>

    <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
    <input type="hidden" name="type_category" value="furniture">
            <div class="item-img">
                <img src="https://www.pixelstalk.net/wp-content/uploads/images1/Bedroom-furniture-wallpaper-coll.jpg"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">30000</p>
                <p id="item_title" class="item_title" name="item_title">House furniture one bed,one clothshlef.</p>
                <input type="hidden" name="item_title" value="House furniture one bed,one clothshlef.">
                <input type="hidden" name="price" value="30000">
                <input type="hidden" name="img"
                    value="https://www.pixelstalk.net/wp-content/uploads/images1/Bedroom-furniture-wallpaper-coll.jpg">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
    </form>

    
        </div>
    <script>
    function addcart() {
        let quantity = document.getelementById("order_item").value;
        console.log("Adding, Quentity, of this item to cart ")
    }
    </script>
</body>

</html>