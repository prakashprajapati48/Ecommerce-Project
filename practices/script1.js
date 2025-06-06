// function comments() {
//     let img_src = document.getElementById("payment_redirect_img")
//     let order_item_recive = document.getElementById("order_item_recive")
//     let item_title = document.getElementById("item_title")
//     let price_show = document.getElementById("price_items_show")

//     let im1 = sessionStorage.getItem("img")
//     console.log(im1)
//     img_src.src = sessionStorage.getItem("img")
//     order_item_recive.innerText = sessionStorage.getItem("order_item_recive")
//     item_title.innerText = sessionStorage.getItem("item_title")
//     price_show.innerText = sessionStorage.getItem("price_show")
// }

// // let img_src = document.getElementById("payment_redirect_img")
// // let order_item_recive = document.getElementById("order_item_recive")
// // let item_title = document.getElementById("item_title")
// // let price_show = document.getElementById("price_items_show")
// // img_src = img_src.src

// // sessionStorage.setItem("img", img_src)
// // sessionStorage.setItem("order_item", order_item_recive.value)
// // sessionStorage.setItem("item_title", item_title.value)
// // sessionStorage.setItem("price_show", price_show.innerText)

// // if (img_src.src == "http://localhost/practices/payment_redirect.php" || order_item_recive == 1 || item_title == "" || price_show == "Price of item:") {
// //     return Error;
// // }

// // else {
// //     sessionStorage.setItem("img", img_src)
// //     sessionStorage.setItem("order_item", order_item_recive.value)
// //     sessionStorage.setItem("item_title", item_title.value)
// //     sessionStorage.setItem("price_show", price_show.innerText)
// // }

// // submit_bt.onclick = () => comments()
// let submit_bt = document.getElementById("modals_btn")

// submit_bt.click(comments)
// submit_bt.addEventListener("click", (e) => {
//     e.preventDefault
//     e.defaultPrevented
//     comments
// })

// function acb() {
//     let payment_redirect_img = document.getElementById("payment_redirect_img")
//     let item_title = document.getElementById("title")
//     let price = document.getElementById("price_items_show")
//     let order_item_recive = document.getElementById("order_item_recive")

//     if (payment_redirect_img == null && item_title == "" && price == "" && order_item_recive == "") {
//         let im1 = sessionStorage.getItem("img")
//         payment_redirect_img.src = im1;
//         order_item_recive.innerText = sessionStorage.getItem("order_item_recive")
//         item_title.innerText = sessionStorage.getItem("item_title")
//         price.innerText = sessionStorage.getItem("price_show")
//     }
// }


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