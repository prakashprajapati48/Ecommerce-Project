<?php
    include 'header/navbar.php';
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
        echo "Connected <br>";
    } 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $confirm_order = isset($_POST["confirm"]) ? $_POST["confirm"] : (isset($_GET["confirm"]) ? $_GET["confirm"] : false);
        $img = $_POST['img_paym'];
        $item_title = $_POST['item_title_hidden'];
        $item_num = $_POST['price_items_confing'];
        $total_price = $_POST['total_price'];
        $payment_option = $_POST['payment'];
        $per_price = $_POST['per_price'];
        $type_category = $_POST['type_category'];

        // echo "<p id='redirection' style='visibility:hidden'></p>";
        echo "<a href='/practices/index.php?msg=order_confirm' id='urlredirection'><button id='redirection' style='visibility:hidden'>index</button></a>";

        if(isset($_SESSION['username']) && isset($_SESSION["login_success"])){
            $user_name = $_SESSION['username'];
            $login_Status = $_SESSION["login_success"];
            echo $login_Status;
        
            echo $type_category;
            // echo "<br>";
            echo '<p>'.$total_price.'</p>';

            $sql = "INSERT INTO `ecomm` (`username`, `product_name`, `category`, `product_img`, `no_items`, `per_price`, `total_price`, `payment_method`, `dt`) VALUES ('$user_name','$item_title', '$type_category', '$img', '$item_num', '$per_price', '$total_price', '$payment_option' , current_timestamp())";
            if($login_Status != true){
                echo "<p id='insertion_data1' class='insertion_data1' value='Please login first!'>Please login first!</p>";
            }
            
            else{
                $ins = mysqli_query($conn,$sql);
            }
            
                if($ins){
                    echo "<p id='insertion_data' class='insertion_data' value='Done'>Done</p>";
                }
            }

        else{
            echo "Not set";
            echo "<p class='insertion_data' id='insertion_data1' value='Please login first!'>Please login first!</p>";
        }
    }

    else{
        echo "error: ";
    }  
?>

<script>
let redirection = document.getElementById("redirection");

let insertion_data = document.getElementsByClassName("insertion_data");
// for(let i=0;i<insertion_data;i++){
insertion_data = insertion_data[0].innerText

if (insertion_data == "Please login first!") {
    let addedurl = document.getElementById('urlredirection')
    addedurl.href = "/practices/index.php?msg=login_Err";
    redirection.click();
    console.log(addedbtn);
}

else if(insertion_data == "Done"){
    let addedurl = document.getElementById('urlredirection')
    addedurl.href = "/practices/index.php?msg=confirm_order";
    redirection.click();
}

else {
    console.log("Button is not clicking!")
}
// }
</script>