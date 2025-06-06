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
    <form action="../payment_redirect.php" method="POST" id="ele_form" class="ele_form">
        <input type="hidden" name="type_category" value="electronic">
        <div class="item-img">
            <img src="https://helios-i.mashable.com/imagery/articles/05djrP5PjtVB7CcMtvrTOAP/images-4.fill.size_2000x1125.v1723100793.jpg"
            alt="..." id="img1" name="ig" class="imgs">
            <div class="content"><center>
            <p id="price_item" class="price_item">10000</p>
                <p id="item_title" class="item_title" name="item_title">Lenovo Laptop(i-3 processor with intel)</p>
                <input type="hidden" name="item_title" value="Lenovo Laptop(i-3 processor with intel)">
                <input type="hidden" name="price" value="10000">
                <input type="hidden" name="img"
                    value="https://helios-i.mashable.com/imagery/articles/05djrP5PjtVB7CcMtvrTOAP/images-4.fill.size_2000x1125.v1723100793.jpg">
                <button type="submit" id="submit" class="submit" name="submit" value="2500_1" >Add
                    to cart</button>
            </center></div>
            </div>
    </form>

    <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
    <input type="hidden" name="type_category" value="electronic">
        <div class="item-img">
            <img src="https://images.unsplash.com/photo-1577375729152-4c8b5fcda381?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" name="ig" id="img1" class="imgs">
                <div class="content"><center>
            <p id="price_item" class="price_item">25000</p>
            <p id="item_title" class="item_title" name="item_title">Dell latptop(New generation feature with i-5 intel processor) and Gen.11</p>
            <input type="hidden" name="item_title" value="Dell latptop(New generation feature with i-5 intel processor) and Gen.11">
            <input type="hidden" name="price" value="25000">
            <input type="hidden" name="img"
                value="https://images.unsplash.com/photo-1577375729152-4c8b5fcda381?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <button type="submit" id="submit" class="submit" name="submit" value="2">Add
                to cart</button>
                </center></div>
        </div>
    </form>
    <form action="../payment_redirect.php" method="post" id="ele_form" class="ele_form">
    <input type="hidden" name="type_category" value="electronic">
        <div class="item-img">
            <img src="https://5.imimg.com/data5/SELLER/Default/2023/3/296178163/GX/GL/SD/186724856/vivo-mobile-phone.jpg"
                alt="" name="ig" id="img1" class="imgs">
                <div class="content"><center>
            <p id="price_item" class="price_item">52000</p>
            <p id="item_title" class="item_title" name="item_title">Vivo V21(6GB Ram,128GB Storage capicity)</p>
            <input type="hidden" name="item_title" value="Vivo V21(6GB Ram,128GB Storage capicity)">
            <input type="hidden" name="price" value="52000">
            <input type="hidden" name="img"
                value="https://5.imimg.com/data5/SELLER/Default/2023/3/296178163/GX/GL/SD/186724856/vivo-mobile-phone.jpg">
            <button type="submit" id="submit" class="submit" name="submit" value="3">Add
                to cart</button>
                </center></div>
        </div>
    </form>
</div>

    <!-- <script>
    let btn = document.getElementsByClassName("submit");
    btn.addEventListener('click', func);

    function func() {
        let inum = document.querySelectorAll(".order_item");
        inum = inum.values

        console.log(inum)
        sessionStorage.setItem("number_item", inum)

        // let pi = document.querySelectorAll(".price_item")
        let pi = document.getElementsByClassName("price_item")
        pi = pi.innerText
        sessionStorage.setItem("number_item_price", pi)

        <?php $pi = $_SESSION['pi']; ?>

    }
    </script> -->
    <!-- <script src="script.js"></script> -->
</body>

</html>