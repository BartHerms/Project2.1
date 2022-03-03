<header>
    <div class="topnav">
        <ul>
            <li><a href="../public/index.php">NHL Webshop</a></li>
            <form action="<?= htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="zoek"> <input class="Zoek" type="text" name="Search" placeholder="Search:" value=""></div>
            </form>
            <li><a href="../src/Login.php">Login</a></li>
            <li><a href="../src/Logout.php">Logout</a></li>
            <li><a href="../src/cart.php">Cart</a></li>
            <li><a href="../src/admin.php">Admin</a></li>
        </ul>
    </div>
</header>