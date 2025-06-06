<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment_method</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include 'header/navbar.php'; ?>
        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo'
    <form action="" method="post">
    <div class="container">
            <div class="modal fade" id="payment_modal_conform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Conform-order</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="https://i0.wp.com/blogrevamp.cashfree.com/wp-content/uploads/2023/02/Cashfree-Secure-Payment-Gateway.png?fit=1200%2C800&ssl=1" alt="">
                        <label for="payment">Select Payment method: </label>
                        <select name="payment" id="payment">
                            <option value="Select">Select</option>
                            <option value="Cash">Cash on Delivery</option>
                            <option value="online">Online Payment</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="'.$_SERVER["PHP_SELF"].'?confirm=true&img='.$img.'&price='.$item_title.'&price_num='.$pi.'">
                        <button type="button" class="btn btn-primary">Save changes</button></a>
                    </div>
                </div>
                </div>
        </div>
        </div>
    </form>';
        }

        $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "ecomm";

    $conn = mysqli_connect($server,$username,$pass,$db);

    if(!$conn){
        echo "<input type='hidden' name='conect' value='Not Connected'>";
    }
    else{
        echo "<input type='hidden' name='conect' value='Connected'>";
        
    } 

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            session_start();
            if (isset($_SESSION["img"]) && isset($_SESSION["pi"]) && isset($_SESSION['item_num'])) {
            $conform_order = $_GET["confirm"];
            $img = $_SESSION['img'];
            echo $img;
            $pi = $_SESSION['pi'];
            $items = $_SESSION['item_num'];
            echo $items;
            '<p class="conf_item" value=""></p>';
    
            if($conform_order != "true"){
                echo 'Not insert data fail';
            }
            
            else{
                $sql = "INSERT INTO `ecomm` (`product_name`, `product_img`, `no_items`, `dt`) VALUES ('electronic1', '$img', '$items', current_timestamp())";
                $ins = mysqli_query($conn,$sql);
                echo "Done";
            }
        }
        }
    ?>
    <script src="script.js"></script>
</body>

</html>