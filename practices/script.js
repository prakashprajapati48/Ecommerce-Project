
let price_item = document.getElementById("price_item").innerText
sessionStorage.setItem("price_item", price_item)
let price_Add = document.getElementById("price", price_item)
price_Add = sessionStorage.getItem("price_item")

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

}

// payment_redirect

// let payment_btn = document.getElementById("modals_btn")
// payment_btn.addEventListener('click',clload)

//     let price_add_item = document.getElementById("price_num").value
//     let price_items_show = document.getElementById("price_items_show")
//     price_items_show.innerText = `Price of item: ${price_add_item}`;

// function clload(){
//     let num =document.getElementById("order_item_recive").value

//     sessionStorage.setItem("order_item",num)

//     let conord = document.getElementById("conf_item")
//     conord.innerText = `Number of items: ${num}`;

//     let price_item = sessionStorage.getItem("price_item")
//     // let price_add_item = document.getElementById("price_num").value
//     let price_item_conf = document.getElementById("price_item_conf")
//     let total_price = (num * price_add_item)

//     price_item_conf.innerText = `Total item ${num} and price is ${total_price}`
// }

// let btb = document.getElementsByClassName("comment_submit")
// btb.addEventListener("click", click_btn);

// let click_btn = (e) =>{
//     e.preventDefault();
// }

// let comment_btn = document.getElementById("comment_submit")
// let comment_btn = document.querySelectorAll(".comment_submit")
// comment_btn.addEventListener("submit", click_func)

// function click_func(e) {
//     let comment_btn = document.querySelectorAll(".comment_submit")
//     e.preventDefault();
// }

// document.querySelector(".comment_submit").addEventListener("click", (e) => {
//     e.preventDefault();
//     e.defaultPrevented
// });

// sessionStorage.setItem("img",img_src)
// sessionStorage.setItem("order_item",order_item_recive)
// sessionStorage.setItem("item_title",item_title)
// sessionStorage.setItem("price_show",price_show)

// img_src = img_src.src
function comments() {
    let img_src = document.getElementById("payment_redirect_img")
    let order_item_recive = document.getElementById("order_item_recive")
    let item_title = document.getElementById("item_title")
    let price_show = document.getElementById("price_items_show")

    let im1 = sessionStorage.getItem("img")
    console.log(im1)
    img_src.src = sessionStorage.getItem("img")
    order_item_recive.innerText = sessionStorage.getItem("order_item_recive")
    item_title.innerText = sessionStorage.getItem("item_title")
    price_show.innerText = sessionStorage.getItem("price_show")
}

let submit_bt = document.getElementById("modals_btn")
// submit_bt.onclick = () => comments()
submit_bt.addEventListener("click", comments())
// submit_bt.style = "positon:relative"

let settable_format = document.querySelectorAll(".dt-layout-row")
settable_format[0].style = "positon:relative; bottom:40rem;";
