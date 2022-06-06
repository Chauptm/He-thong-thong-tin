<nav class="top-nav">
    <ul class="menu">
        <li>
            <a href="http://">
                <img src="https://www.ivivu.com/du-lich/content/img/logo.svg" alt="">
            </a>
        </li>
        <li class= "active">
            <a href="<?php echo URLROOT; ?>/index">Khách sạn </a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/tours/tours">Tours</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/index">Vé máy bay</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/index">Ăn uống</a>
        </li>
        <li>
            <i class="fas fa-angle-double-down"></i>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <img src="https://www.ivivu.com/du-lich/content/img/avatars/avatar-default-white.svg" alt="">
                <a href="<?php echo URLROOT; ?>/users/login">Đăng nhập</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

