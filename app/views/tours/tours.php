<?php
   require APPROOT . '/views/includes/head.php';
?>
<div class="navbar">
    <?php
        require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div id="index-container">
    <div class="index-image">
        <div class="index-body">
            <div class="index-content">
                <h1>Du lịch theo phong cách riêng</h1>
                <h3>Trải nghiệm trọn vẹn - Giá cả phải chăng.</h3>
            </div>
            <div class="index-form">
                <form action="" method="get">
                    <div class="add-to">
                            <i class="fas fa-map-marker-alt"></i>
                            <input type="text" name="add_to" id="add_to" placeholder="Bạn muốn đi đâu?">
                    </div>
                    <div class="date-time">
                        <div class="time">
                            <input type="date" name="date" id="date">
                        </div>
                        <div class="add_from">
                            <i class="fas fa-plane"></i>
                            <input type="text" name="add_from" id="add_from" placeholder="Khởi hành từ">
                        </div>
                        <div class="form-button">
                            <input type="button" value="Tìm">
                        </div>
                    </div>
                </form>
                <div class="content-form">
                    <p>Tailor tour - Trải nghiệm theo các riêng của bạn</p>
                    <input type="button" value="Đặt tour riêng">
                </div>
            </div>
        </div>
    </div>
    <div class="index-select">
        <div class="select-item">
            <i class="fa fa-check-circle"></i>
            <p>Giá tour tốt nhất</p>
        </div>
        <div class="select-item">
            <i class="fa fa-check-circle"></i>
            <p>Chất lượng tốt nhất</p>
        </div>
        <div class="select-item">
            <i class="fa fa-check-circle"></i>
            <p>Tư vấn tận tình</p>
        </div>
        <div class="select-item">
            <i class="fa fa-check-circle"></i>
            <p>Thanh toán linh hoạt</p>
        </div>

    </div>
</div>

<?php
   require APPROOT . '/views/includes/footer.php';
?>
