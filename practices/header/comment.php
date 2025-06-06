<?php
    // <form>
    // <form action="'.$_SERVER["PHP_SELF"].'" method="POST">
        $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "ecomm";
    $conn = mysqli_connect($server,$username,$pass,$db);
    echo
    '
    <form method="POST">
    <div class="comments content" id="content_comment">
        <textarea name="comment" type="text" id="comment" cols="170" rows="10" placeholder="Comment section"></textarea><br>
        <button type="submit" type="text" id="comment_submit" class="comment_submit">Comment</button>
    </div>
    </form>';

    $item_title = $_SESSION['item_title'];
    // echo "Title is: ".$item_title;

    $sql_comment = "SELECT * FROM `comment` WHERE `type` LIKE '$item_title'";
    $result_title = mysqli_query($conn,$sql_comment);
    $numres = mysqli_num_rows($result_title);
    
    echo '<div class="comments_container">
        ';

        if($numres>0){
            while($row = mysqli_fetch_array($result_title,MYSQLI_ASSOC)){
                echo '<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2 my-3" tabindex="0">
                            <h4 id="scrollspyHeading1" class="d-flex">'.$row['user_name'].'</h4>
                            <p style="display: flex;justify-content: flex-end; margin-top: -30px;">'.$row['dt'].'</p>
                            <p>'.$row['comment_content'].'</p>
                    </div>';
                    }
            echo '</div>';
        }

    $title = $_SESSION['item_title'];
    $title1;
    if($title != ""){
        $title1 = $title;
        $_SESSION['titl'] = $title1;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $comment = isset($_POST["comment"]) ? $_POST["comment"] : (isset($_GET["comment"]) ? $_GET["comment"] : false);
        echo "<div class='cate' id='cate' style='visibility:hidden'>c</div>";
        $ttitle = $_SESSION['titl'];

        if(isset($_SESSION["username"])){
        $user_name = $_SESSION["username"];

        if(empty($comment)){
            echo $comment;
        }

        else{
            $sql1 = "INSERT INTO `comment` (`user_name`,`type`, `comment_content`, `dt`) VALUES ('$user_name', '$ttitle', '$comment', current_timestamp())";
            $ins1 = mysqli_query($conn,$sql1);

            if(!$ins1){
                "Error: ".$ins1;
            }
            else{
                "inseted";
            }
        }
    }
}

?>

<script>
let img = sessionStorage.getItem("img")
let items = sessionStorage.getItem("order_item_recive")
let it = sessionStorage.getItem("item_title")
let prsh = sessionStorage.getItem("price_show")

let submit_bt = document.getElementById("comment_submit")

function comments() {
    let img_src = document.getElementById("payment_redirect_img")
    let order_item_recive = document.getElementById("order_item_recive")
    let item_title = document.getElementById("item_title")
    let price_show = document.getElementById("price_items_show")
    // let cate = document.getElementById("cate");

    let im1 = sessionStorage.getItem("img")
    console.log("comment img: " + im1)
    img_src.src = im1;
    order_item_recive.innerText = sessionStorage.getItem("order_item_recive")
    item_title.innerText = sessionStorage.getItem("item_title")
    price_show.innerText = sessionStorage.getItem("price_show")
    // cate.innerText = sessionStorage.getItem("item_title")
    console.log("This comment is: " + cate)
}

function acb() {
    let payment_redirect_img = document.getElementById("payment_redirect_img")
    let item_title = document.getElementById("title")
    let price = document.getElementById("price_items_show")
    let order_item_recive = document.getElementById("order_item_recive")
    // let cate = document.getElementById("cate");

    if (payment_redirect_img == "" && item_title == "" && price == "" && order_item_recive == "") {
        let im1 = sessionStorage.getItem("img")
        payment_redirect_img.src = im1;
        order_item_recive.innerText = sessionStorage.getItem("order_item_recive")
        item_title.innerText = sessionStorage.getItem("item_title")
        price.innerText = sessionStorage.getItem("price_show")
        // cate.innerText = sessionStorage.getItem("item_title")
    }
}

let payment_redirect_img = document.getElementById("payment_redirect_img")
let item_title = document.getElementById("title")
let price = document.getElementById("price_items_show")
let order_item_recive = document.getElementById("order_item_recive")
// let cate = document.getElementById("cate");

if (payment_redirect_img == "" && item_title == "" && price == "" && order_item_recive == "") {
    let im1 = sessionStorage.getItem("img")
    payment_redirect_img.src = im1;
    order_item_recive.innerText = sessionStorage.getItem("order_item_recive")
    item_title.innerText = sessionStorage.getItem("item_title")
    price.innerText = sessionStorage.getItem("price_show")
    // cate.innerText = sessionStorage.getItem("item_title")
}

let comment = document.getElementById("comment")
</script>