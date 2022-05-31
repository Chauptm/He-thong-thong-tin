<nav class="top-nav">
    <ul>
        <li>
            <a href="http://">
                <img src="https://www.ivivu.com/du-lich/content/img/logo.svg" alt="">
            </a>
        </li>
        <li class= "active">
            <a href="<?php echo URLROOT; ?>/index"> Khach san </a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/tour">Tours</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/index">Ve may bay</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/index">An uong</a>
        </li>
        <li>
            <i class="fas fa-angle-double-down"></i>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <img src="https://www.ivivu.com/du-lich/content/img/avatars/avatar-default-white.svg" alt="">
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
