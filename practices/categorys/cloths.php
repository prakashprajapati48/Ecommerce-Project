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
            <input type="hidden" name="type_category" value="cloths">
            <div class="item-img">
                <img src="https://i.pinimg.com/564x/10/eb/12/10eb12eeea86441860a79ebd70f4f29f.jpg"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">10000</p>
                <p id="item_title" class="item_title" name="item_title">Jeans,T-shirt and Jacket Combo</p>
                <input type="hidden" name="item_title" value="Jeans,T-shirt and Jacket Combo">
                <input type="hidden" name="price" value="10000">
                <input type="hidden" name="img"
                    value="https://i.pinimg.com/564x/10/eb/12/10eb12eeea86441860a79ebd70f4f29f.jpg">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
    </form>

    <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
            <div class="item-img">
            <input type="hidden" name="type_category" value="cloths">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfTzfAc-H3JkcJf3AQqFxq5LCeKJxEIhm5Ww&s"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">45000</p>
                <p id="item_title" class="item_title" name="item_title">All colors Shirts and shut any jeans</p>
                <input type="hidden" name="item_title" value="All colors Shirts and shut any jeans">
                <input type="hidden" name="price" value="45000">
                <input type="hidden" name="img"
                    value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfTzfAc-H3JkcJf3AQqFxq5LCeKJxEIhm5Ww&s">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
    </form>

    <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
            <div class="item-img">
            <input type="hidden" name="type_category" value="cloths">
                <img src="https://plus.unsplash.com/premium_photo-1679056833362-f6e9b53774c1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">15750</p>
                <p id="item_title" class="item_title" name="item_title">Format Shirts</p>
                <input type="hidden" name="item_title" value="Format Shirts">
                <input type="hidden" name="price" value="15750">
                <input type="hidden" name="img"
                    value="https://plus.unsplash.com/premium_photo-1679056833362-f6e9b53774c1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
            </div>
    </form>
    <!-- <script>
    function addcart() {
        let quantity = document.getelementById("order_item").value;
        console.log("Adding, Quentity, of this item to cart ")
    }
    </script> -->
    <!-- <script src="script.js" defer></script> -->
   
</body>

</html>