<nav class="top-nav">
    <ul class="menu">
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
        
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Đăng xuất</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Đăng nhập</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

