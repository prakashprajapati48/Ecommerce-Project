<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopysh</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include 'header/navbar.php'; ?>
    <!-- <?php 
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET['msg'])){
        $alt = $_GET['msg'];
        echo $alt;
        if($alt == "new_account_true"){
            echo '<div class="alert alert-primary" role="alert">
                    <p>Your account is created successfully!</p>
                </div>';
        }
    }
    } ?> -->
    <?php
        include 'header/alert.php';
    ?>

    <div id="carouselExampleIndicators" class="carousel slide justify-content-center"
        style="width: 86%; justify-self:center;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1555529733-0e670560f7e1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="..." class="d-block w-100" style="height: 50rem;">
            </div>
            <div class="carousel-item ">
                <img src="https://images.unsplash.com/photo-1534452203293-494d7ddbf7e0?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="d-block w-100 " alt="..." style="height: 50rem;">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1555529669-2269763671c0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="..." class="d-block w-100" style="height: 50rem;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <form action="payment_redirect.php" method="POST" id="ele_form" class="ele_form">
            <div class="item-img">
                <img src="https://helios-i.mashable.com/imagery/articles/05djrP5PjtVB7CcMtvrTOAP/images-4.fill.size_2000x1125.v1723100793.jpg"
                    alt="..." id="img1" name="ig" class="imgs">
                <div class="content">
                    <center>
                        <p id="price_item" class="price_item">10000</p>
                        <p id="item_title" class="item_title" name="item_title">Lenovo Laptop(i-3 processor with intel)
                        </p>
                        <input type="hidden" name="item_title" value="Lenovo Laptop(i-3 processor with intel)">
                        <input type="hidden" name="price" value="10000">
                        <input type="hidden" name="img"
                            value="https://helios-i.mashable.com/imagery/articles/05djrP5PjtVB7CcMtvrTOAP/images-4.fill.size_2000x1125.v1723100793.jpg">
                        <button type="submit" id="submit" class="submit" name="submit" value="2500_1">Add
                            to cart</button>
                    </center>
                </div>
            </div>
        </form>

        <form action="payment_redirect.php" method="post" id="ele_form" class="ele_form">
            <div class="item-img">
                <img src="https://images.unsplash.com/photo-1577375729152-4c8b5fcda381?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" name="ig" id="img1" class="imgs">
                <div class="content">
                    <center>
                        <p id="price_item" class="price_item">25000</p>
                        <p id="item_title" class="item_title" name="item_title">Dell latptop(New generation feature with
                            i-5 intel processor) and Gen.11</p>
                        <input type="hidden" name="item_title"
                            value="Dell latptop(New generation feature with i-5 intel processor) and Gen.11">
                        <input type="hidden" name="price" value="25000">
                        <input type="hidden" name="img"
                            value="https://images.unsplash.com/photo-1577375729152-4c8b5fcda381?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                        <button type="submit" id="submit" class="submit" name="submit" value="2">Add
                            to cart</button>
                    </center>
                </div>
            </div>
        </form>
        <form action="payment_redirect.php" method="post" id="ele_form" class="ele_form">
            <div class="item-img">
                <img src="https://5.imimg.com/data5/SELLER/Default/2023/3/296178163/GX/GL/SD/186724856/vivo-mobile-phone.jpg"
                    alt="" name="ig" id="img1" class="imgs">
                <div class="content">
                    <center>
                        <p id="price_item" class="price_item">52000</p>
                        <p id="item_title" class="item_title" name="item_title">Vivo V21(6GB Ram,128GB Storage capicity)
                        </p>
                        <input type="hidden" name="item_title" value="Vivo V21(6GB Ram,128GB Storage capicity)">
                        <input type="hidden" name="price" value="52000">
                        <input type="hidden" name="img"
                            value="https://5.imimg.com/data5/SELLER/Default/2023/3/296178163/GX/GL/SD/186724856/vivo-mobile-phone.jpg">
                        <button type="submit" id="submit" class="submit" name="submit" value="3">Add
                            to cart</button>
                    </center>
                </div>
            </div>
        </form>
    </div>
    
    <?php include "header/footer.php"; ?>
    <script>
    function addcart() {
        let quantity = document.getelementById("order_item").value;
        console.log("Adding, Quentity, of this item to cart ")
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>