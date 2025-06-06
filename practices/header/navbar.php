<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopysh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/practices/index.php">Shopysh</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/practices/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/practices/category.php">link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/practices/categorys/all-category.php">All Category</a>
                            </li>
                            <li><a class="dropdown-item" href="/practices/categorys/electronic.php">Electronic</a></li>
                            <li><a class="dropdown-item" href="/practices/categorys/furniture.php">Furniture</a></li>
                            <li><a class="dropdown-item" href="/practices/categorys/cloths.php">Cloths</a></li>
                            <li><a class="dropdown-item" href="/practices/categorys/footware.php">Footware</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li> -->
                    <!-- <li>
                        
                    </li> -->
                </ul>
                <?php 
                        session_start(); 
                        if(isset($_SESSION["username"])){
                            echo '<ul class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle-hover" id="showusers" value="'.$_SESSION["username"].'" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false">
                                        '.$_SESSION["username"].'
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/practices">Profile</a></li>
                                        <li><a class="dropdown-item" href="/practices/header/orders.php">Orders</a></li>
                                        <li><a class="dropdown-item" href="/practices/new_acc/logout.php">logout</a></li>
                                        </ul>
                                        </ul>
                                        ';
                            // echo '<div  class="btn btn-primary">'.$_SESSION["username"].'</div>'; '.session_commit() . ''.session_destroy().'
                            // echo $_SESSION['username'];
                        }
                        else{
                            echo ' <button class="btn btn-primary mx-1" data-bs-toggle="modal"
                            data-bs-target="#signup_modal">Signup</button>';
                            echo '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login_modal">login</button>';
                        }
                        ?>
            </div>
        </div>
    </nav>

    <!-- Signup modal -->
    <div class="modal fade" id="signup_modal" tabindex="-1" aria-labelledby="signup_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style=" width:75%; height:25rem; position: relative; left: 3.5rem;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signup_modal">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./new_acc/signup.php" method="post">
                        <input type="email" name="uemail" placeholder="Enter email" class="my-2" id="uemail" style=" width:100%; height:3rem;"><br>
                        <input type="password" name="upassword" placeholder="Enter password" class="my-2" id="upassword" style=" width:100%; height:3rem;"><br>
                        <input type="password" name="cupass" placeholder="Enter confirm password" class="my-2" id="cupass" style=" width:100%; height:3rem;"><br>
                        <!-- <input type="submit" class="my-2" value="submit"> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" value="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Login modal -->
    <div class="modal fade" id="login_modal" tabindex="-1" aria-labelledby="login_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style=" width:75%; height:25rem; position: relative; left: 3.5rem;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="login_modal">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./new_acc/login.php" method="post">
                        <input type="email" name="ulogin_email" id="ulogin_email" class="my-2" style=" width:100%; height:3rem;"><br>
                        <input type="password" name="upass" id="upass" class="my-2" style=" width:100%; height:3rem;"><br>
                        <!-- <input type="submit" value="submit"> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>