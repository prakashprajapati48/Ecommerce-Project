<?php
session_start();
$server = "localhost";
$username = "root";
$pass = "";
$db = "ecomm";

$conn = mysqli_connect($server, $username, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// if (isset($_SESSION['img']) && isset($_SESSION['pi']) && isset($_SESSION['item_title']) && isset($_SESSION['item_num']) && isset($_SESSION["username"])) {
//     $img = $_SESSION['img'];
//     $pi = $_SESSION['pi'];
//     $items = $_SESSION['item_num'];
//     $item_title = $_SESSION['item_title'];
//     $user_name = $_SESSION['username'];
//     echo $user_name;

//     // Insert into database
//     $sql = "INSERT INTO `ecomm` (`username`,`product_name`, `product_img`, `no_items`, `dt`) 
//             VALUES ('$user_name','$item_title', '$img', '$items', current_timestamp())";

//     if (mysqli_query($conn, $sql)) {
//         echo "Order placed successfully!";
//         session_destroy();
//     } else {
//         echo "Error: " . mysqli_error($conn);
//     }
// } else {
//     echo "Order data is missing!";
// }

mysqli_close($conn);
?>
