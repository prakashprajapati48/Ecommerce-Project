<?php 
    // This can show the message user in alert type

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_GET['msg'])){
        $alt = $_GET['msg'];
        // echo $alt;
        
        // Check the which type of alert are showing in this error
        if($alt == "new_account_true"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>Your account is created successfully!</p>
                </div>';
        }

        elseif($alt == "logout"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>You have Successfully logout!</p>
                </div>';
        }
        
        elseif($alt == "login"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>You have Successfully login!</p>
                </div>';
        }
        
        elseif($alt == "order_confirm"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>Your Order is successfully Placed!</p>
                </div>';
            }
            
        elseif($alt == "confirm_order"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>Your Order is successfully Placed!</p>
                </div>';
            }

        elseif($alt == "login_Err"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>Please login your account! And place your order.</p>
                </div>';
        }
        
        elseif($alt == "pswn"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>Enter password is not match! Please try again.</p>
                </div>';
        }
        
        elseif($alt == "exist_not"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>This username <b>'.$_SESSION['not_exist_username'].'</b> is not exist. Please create your account!</p>
                </div>';
        }
        
        elseif($alt == "account_exist"){
            echo '<div class="alert alert-primary alert_msg" role="alert">
                    <p>This username <b>'.$_SESSION['exist_username'].'</b> is Already exist. Please login your account!</p>
                </div>';
        }
        }
    }
?>

<script>
let alert_msg = document.getElementsByClassName("alert_msg")

let visblehid = () => {
    for (let i = 0; i < alert_msg.length; i++) {
        // alert_msg[i].style.visibility = "hidden";
        alert_msg[i].style.transition = "opacity 1s";
        alert_msg[i].style.opacity = "0";
        alert_msg[i].style.display = "none";
    }
}

setTimeout(visblehid, 5000)
</script>