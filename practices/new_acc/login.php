<?php
    include 'conn.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['ulogin_email'];
        $upass = $_POST['upass'];

        // $sql1 = "SELECT * FROM `users` WHERE `email` LIKE '$username'";
        // $sql1 = "SELECT sno, password FROM users WHERE email = '$username'";
        // $sql1 = "SELECT * FROM `users` WHERE `email` LIKE '$username' AND `password` LIKE '$upass'";
        $sql1 = "SELECT * FROM `users`";
        $result = mysqli_query($conn,$sql1);
        $sersql = mysqli_num_rows($result);

        $userexist = false;
        $userpass_match = false;
        session_start();
        // $_SESSION["username"] = $username;
        $_SESSION["login_success"] = false;
        // echo $sersql;
        if($sersql > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                if($row['email'] === $username){
                    $userexist = true;
                    $dbpass = $row['password'];
                    $checkpass = password_verify($upass,$dbpass);
                    if($checkpass){
                        $userpass_match = true;
                        break;
                    }

                    else{
                        $userpass_match = false;
                    }
                }

                else{
                    $userpass_match = false;
                }
            }
            
            if($userexist == true && $userpass_match == true){
                    echo "<br>Doen And pass Doen<br>";
                    header("Location: /practices?msg=login");
                    $_SESSION["username"] = $username;
                    // echo $_SESSION['username'];
                    $_SESSION["login_success"] = true;
            }

            elseif ($userexist == true && $userpass_match == false){
                echo "Password is not match!<br>";
                header("Location: /practices/index.php?msg=pswn");
                $_SESSION["login_success"] == false;
            }

            elseif ($userexist == false && $userpass_match == false){
                echo $username." Is not exist! Please create your account!";
                $_SESSION['not_exist_username'] = $username;
                header("Location: /practices/index.php?msg=exist_not");
            }
        }

        else{
            echo "Error: ";
        }

        session_commit();
        session_abort();
    }
?>