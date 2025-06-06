<link rel="stylesheet" href="/style/style.css">
<?php
    include "header/navbar.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // session_start();
        $img = $_POST['img'] ?? null;
        $pi = $_POST['price'] ?? null;
        $item_title = $_POST['item_title'] ?? null;
        $type_category = $_POST['type_category'] ?? null;
        
        if($img != "" && $pi!=""){
        $_SESSION['img'] = $img;
        $_SESSION['pi'] = $pi;
        $_SESSION['item_title'] = $item_title;
        '<p name="item_valueing" id="item_valueing"></p>';

        if (!$img || !$pi || !$item_title || !$type_category) {
            $_SESSION["error"] = "Please fill in all required fields.";
        }

        else {
            // Process the form data (e.g., save to the database)
            $_SESSION["success"] = "Form submitted successfully!";
        }
        }

        $img_ord = $img;
        echo '
        <form action="dataset.php" method="post" class="payment_redirect">
        <input type="hidden" name="confirm" value="true">
        <img src="'.$img.'" alt="..." width="300px" class="payment_redirect_img" id="payment_redirect_img"><br>
        <input type="hidden" name="img_paym" id="hidden_img" value="'.$img.'">
        <input type="hidden" name="item_title_hidden" id="item_title_hidden" value="'.$item_title.'">
        <input type="hidden" name="type_category" id="type_category_hidden" value="'.$type_category.'">
        <input type="hidden" name="per_price" id="per_price" value="'.$pi.'">
        <input type="number" name="order_item_recive" id="order_item_recive" min="1" max="50" value="1">
        <p id="title" name="item_title" id="item_title" value="'.$item_title.'">'.$item_title.'</p>
        <p id="price_items_show">Price of item: '.$pi.'</p>
        <button type="button" data-bs-toggle="modal" data-bs-target="#payment_modal" id="modals_btn">Add to cart</button>


        <div class="container">
            <div class="modal fade" id="payment_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Conform-order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <img src="'.$img.'" alt="" name="img_paym" id="order_image">
                            <input type="hidden" name="item_title" id="item_title" value="'.$item_title.'">
                            <input type="hidden" name="price_items_confing" id="price_items_conf" value="">
                            <p id="conf_item" name="num_item_con">Number of items: </p>
                            <input type="hidden" class="conf_item" name="conf_item" value="Connected">
                            <input type="hidden" name="price_num" id="price_num" value="'.$pi.'">
                            <input type="hidden" name="total_price" id="total_price" value="">
                            <p id="price_item_conf">Total amount of '.$pi.'</p>
                            <p id="prices"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#payment_modal_conform"
                                class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="modal fade" id="payment_modal_conform" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Conform-order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://i0.wp.com/blogrevamp.cashfree.com/wp-content/uploads/2023/02/Cashfree-Secure-Payment-Gateway.png?fit=1200%2C800&ssl=1"
                                alt="">
                            <label for="payment">Select Payment method: </label>
                            <select name="payment" id="payment">
                                <option value="Select">Select</option>
                                <option value="Cash">Cash on Delivery</option>
                                <option value="online">Online Payment</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>';
    }

    // $_SESSION['item_titles'] =
    
    include 'header/comment.php';

        // $sql_comment = "SELECT * FROM `comment` WHERE `type` LIKE '$item_title'";
        // $result_title = mysqli_query($conn,$sql_comment);
        // $numres = mysqli_num_rows($result_title);
        
        // echo '<div class="comments_container">
        // <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2 my-3" tabindex="0">';

        // if($numres>0){
        //     while($row = mysqli_fetch_array($result_title,MYSQLI_ASSOC)){
        //         echo '
        //                 <h4 id="scrollspyHeading1" class="d-flex">'.$row['user_name'].'</h4>
        //                 <p style="display: flex;justify-content: flex-end; margin-top: -30px;">'.$row['dt'].'</p>
        //                 <p>'.$row['comment_content'].'</p>
        //                 </div>';
        //             }
        //         echo '</div>';
        // }

        session_commit();
        // session_abort();

?>

<script>
let payment_btn = document.getElementById("modals_btn")
payment_btn.addEventListener('click', clload)

let price_add_item = document.getElementById("price_num").value
let price_items_show = document.getElementById("price_items_show")
price_items_show.innerText = `Price of item: ${price_add_item}`;

function clload() {
    let num = document.getElementById("order_item_recive").value

    sessionStorage.setItem("order_item", num)

    let item_valueing = document.getElementById("order_item_recive").innerText
    item_valueing = num;

    let conord = document.getElementById("conf_item")
    let conord_val = document.getElementsByClassName("conf_item").value
    conord.innerText = `Number of items: ${num}`;
    conord_val = num;

    let price_items_conf = document.getElementById("price_items_conf");
    price_items_conf.value = num;

    let price_item = sessionStorage.getItem("price_item")
    let price_item_conf = document.getElementById("price_item_conf")
    let total_price_collect = document.getElementById("total_price");
    let price_add_item1 = document.getElementById("per_price")
    let total_price = (num * price_add_item1.value)

    price_item_conf.innerText = `Total item ${num} and price is ${total_price}`
    total_price_collect.value = total_price
}


let img_src = document.getElementById("payment_redirect_img")
let order_item_recives = document.getElementById("order_item_recive")
let item_titles = document.getElementById("item_title")
let price_shows = document.getElementById("price_items_show")
img_src = img_src.src

let hidden_title = document.getElementById("item_title_hidden")
let category_type = document.getElementById("type_category")
let img_hidden = document.getElementById("hidden_img")
let hidden_price = document.getElementById("per_price")
let order_image = document.getElementById("order_image")
let category_types = document.getElementById("type_category_hidden")


console.log("script running")
console.log("img_src.src:", img_src);
console.log("order_item_recive.value:", order_item_recives.value);
console.log("item_title.value:", item_titles.value);
console.log("price_show.innerText:", price_shows.innerText);


let payment_redirect_imgs = document.getElementById("payment_redirect_img")
let item_title1 = document.getElementById("title")
let prices = document.getElementById("price_items_show")
let order_item_recive1 = document.getElementById("order_item_recive")
let cate = document.getElementById("cate");

if (
    img_src == "http://localhost/practices/payment_redirect.php" &&
    parseInt(order_item_recives.value) === 1 &&
    item_titles.value.trim() === "" &&
    price_shows.innerText.trim() === "Price of item:") {
    console.log("Condition met: Returning Error");

    hidden_title.value = sessionStorage.getItem("item_title")
    hidden_price.value = sessionStorage.getItem("price_show")
    img_hidden.value = sessionStorage.getItem("img")

    let im1 = sessionStorage.getItem("img")
    payment_redirect_imgs.src = im1;
    order_image.src = im1
    order_item_recive1.innerText = sessionStorage.getItem("order_item")
    item_title1.innerText = sessionStorage.getItem("item_title")
    prices.innerText = sessionStorage.getItem("price_show")
    hidden_price.value = sessionStorage.getItem("hidden_price")
    category_types.value = sessionStorage.getItem("category_types")
    cate.innerText = sessionStorage.getItem("item_title")
    console.log("suceessfully added!")

} else {
    console.log("Else block executing...");

    sessionStorage.setItem("img", img_src);
    sessionStorage.setItem("hidden_price", hidden_price.value);
    sessionStorage.setItem("order_item", order_item_recives.value);
    sessionStorage.setItem("item_title", item_titles.value.trim());
    sessionStorage.setItem("price_show", price_shows.innerText.trim());
    sessionStorage.setItem("category_types", category_types.value)

    console.log("Data saved to sessionStorage.");
}
</script>
<!-- <script src="script1.js"></script> -->