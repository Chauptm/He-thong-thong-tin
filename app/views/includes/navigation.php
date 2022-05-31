<nav class="top-nav">
    <ul>
        <li>
            <a href="">
                <img src="" alt="">
            </a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/index">Home</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/tours">Tours</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/">Vé máy bay</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/contact">Ăn uống</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/contact"></a>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
