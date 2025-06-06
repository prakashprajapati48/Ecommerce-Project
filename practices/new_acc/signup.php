<?php
    include 'conn.php';

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $username = $_POST['uemail'];
      $upass = $_POST['upassword'];
      $cupass = $_POST['cupass'];

      if($upass === $cupass){
        $sql1 = "SELECT * FROM `users` WHERE `email` LIKE '$username'";
        $result1 = mysqli_query($conn,$sql1);
        $sersql = mysqli_num_rows($result1);

        if($sersql > 0){
          while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)){
            if($row['email'] == $username){
              echo "USer is exist";
              $_SESSION['exist_username'] = $username;
              header("Location: /practices/index.php?msg=account_exist");
            }
          }
        }

        else{
            if($conn){
              $hashps = password_hash($upass,PASSWORD_DEFAULT);
              $sql = "INSERT INTO `users` (`email`, `password`, `dt`) VALUES ('$username', '$hashps', current_timestamp())";
              $ins = mysqli_query($conn,$sql);
              if($ins){
                echo "Data is successfully inserted";
                header("Location: /practices/index.php?msg=new_account_true");
              }
              else{
                echo "Data insertion failed! Please try again!";
              }
            }
          }
        }
    }
?>