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
            <input type="hidden" name="type_category" value="footware">
            <div class="item-img">
                <img src="https://rukminim2.flixcart.com/image/850/1000/jbgtnrk0/shoe/w/w/j/casual-sports-thrilling-shoes-10-hd-black-original-imafyah5xzf2quvk.jpeg?q=90&crop=false"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">12500</p>
                <p id="item_title" class="item_title" name="item_title">Best for regular using</p>
                <input type="hidden" name="item_title" value="Best for regular using">
                <input type="hidden" name="price" value="12500">
                <input type="hidden" name="img"
                    value="https://rukminim2.flixcart.com/image/850/1000/jbgtnrk0/shoe/w/w/j/casual-sports-thrilling-shoes-10-hd-black-original-imafyah5xzf2quvk.jpeg?q=90&crop=false">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
    </form>

    <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
    <input type="hidden" name="type_category" value="footware">
            <div class="item-img">
                <img src="https://rukminim2.flixcart.com/image/450/500/xif0q/shoe/l/d/l/-original-imahf3kvwrbuhgh9.jpeg?q=90&crop=false"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">18550</p>
                <p id="item_title" class="item_title" name="item_title">Sport shoes for running and excesise.</p>
                <input type="hidden" name="item_title" value="Sport shoes for running and excesise">
                <input type="hidden" name="price" value="18550">
                <input type="hidden" name="img"
                    value="https://rukminim2.flixcart.com/image/450/500/xif0q/shoe/l/d/l/-original-imahf3kvwrbuhgh9.jpeg?q=90&crop=false">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
    </form>

    <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
    <input type="hidden" name="type_category" value="footware">
            <div class="item-img">
                <img src="https://t4.ftcdn.net/jpg/04/79/11/23/360_F_479112366_dku6Ufwd9OVnRB3AZxonMgRzuZYeTTYY.jpg"
                    alt="..." id="img1" name="ig" class="imgs">
                    <div class="content"><center>
                <p id="price_item" class="price_item">44000</p>
                <p id="item_title" class="item_title" name="item_title">Full white shoes with leather</p>
                <input type="hidden" name="item_title" value="Full white shoes with leather">
                <input type="hidden" name="price" value="44000">
                <input type="hidden" name="img"
                    value="https://t4.ftcdn.net/jpg/04/79/11/23/360_F_479112366_dku6Ufwd9OVnRB3AZxonMgRzuZYeTTYY.jpg">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                    to cart</button>
                    </center></div>
            </div>
    </form>
        </div>
    </form>
    <script>
    function addcart() {
        let quantity = document.getelementById("order_item").value;
        console.log("Adding, Quentity, of this item to cart ")
    }
    </script>
</body>

</html>