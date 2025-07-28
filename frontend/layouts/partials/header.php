<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <a class="navbar-brand" href="/">DemoShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" ariacontrols="navbarSupportedContent" aria-expanded="false" arialabel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/Day6/frontend/index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/Day6/backend/pages/dashboard.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Day6/frontend/pages/about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Day6/frontend/pages/contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Day6/frontend/pages/viewCart.php">Cart</a>
            </li>
        </ul>
        <ul class="navbar-nav px-3 ml-auto">
            <?php
            // Đã đăng nhập rồi -> hiển thị tên Người dùng và menu Đăng xuất
            if (
                isset($_SESSION['kh_tendangnhap_logged']) &&
                !empty($_SESSION['kh_tendangnhap_logged'])
            ) :
            ?>
                <li class="nav-item text-nowrap">
                    <a class="nav-link">Welcome <?= $_SESSION['kh_tendangnhap_logged']; ?></a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="/Day6/frontend/pages/logout.php">Logout</a>
                </li>
            <?php else : ?>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="/Day6/frontend/pages/login.php">Login</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="/Day6/frontend/pages/register.php">Register</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
</nav>