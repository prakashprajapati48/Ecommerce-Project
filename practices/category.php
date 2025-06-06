<?php
 include 'navbar.php';
?>
<link rel="stylesheet" href="style.css">
<form action="payment_redirect.php" method="post">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Dropdown link
        </a>

        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="categorys/all-category.php">All Category</a></li>
            <li><a class="dropdown-item" href="categorys/accessory.php">Accessory</a></li>
            <li><a class="dropdown-item" href="categorys/electronic.php">Electronic</a></li>
            <li><a class="dropdown-item" href="categorys/cloths.php">Cloths</a></li>
            <li><a class="dropdown-item" href="categorys/footware.php">Footware</a></li>
        </ul>
    </div>
</form>