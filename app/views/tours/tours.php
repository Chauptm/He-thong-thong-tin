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
    <div class="tours">
    <div class="tour">
            <div class="tour-name">Du lịch hè</div>
            <div class="tour-info">Điểm đến thú vị, vui chơi thỏa thích</div>
            <div class="tour-detail">
            <div class="tour-item">
                    <div class="tour-image">
                        <img src="../public/img/images.jpg" alt="" srcset="">
                    </div>
                    <div class="tour-body">
                        <div class="tour-item-name">
                            <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tây Nguyên: Tà Nùng- Buôn Mê Thuật- Thác Dray Nu</a>
                        </div>
                        <div class="tour-from">
                            <label for="">Đi từ: </label>
                            Hà Nội
                        </div>
                        <div class="tour-to">
                            <label for="">Đi đến: </label>
                            Tây Nguyên
                        </div>
                        <div class="tour-min-person">
                            <label for="">Số người tối thiểu: </label>
                            2 người
                        </div>
                        <div class="tour-max-person">
                            <label for="">Số người tối đa: </label>
                            5 người
                        </div>
                        <div class="tour-start-date">
                            <label for="">Ngày bắt đầu: </label>
                            3/5/2022
                        </div>
                        <div class="tour-end-date">
                            <label for="">Ngày kết thúc: </label>
                            5/5/2022
                        </div>
                        <div class="tour-guide">
                            <label for="">Hướng dẫn viên:</label>
                            Phạm Thị Minh Châu
                        </div>
                    </div>

                </div>
                <div class="tour-item">
                    <div class="tour-image">
                        <img src="../public/img/images.jpg" alt="" srcset="">
                    </div>
                    <div class="tour-body">
                        <div class="tour-item-name">
                            <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tây Nguyên: Tà Nùng- Buôn Mê Thuật- Thác Dray Nu</a>
                        </div>
                        <div class="tour-from">
                            <label for="">Đi từ: </label>
                            Hà Nội
                        </div>
                        <div class="tour-to">
                            <label for="">Đi đến: </label>
                            Tây Nguyên
                        </div>
                        <div class="tour-min-person">
                            <label for="">Số người tối thiểu: </label>
                            2 người
                        </div>
                        <div class="tour-max-person">
                            <label for="">Số người tối đa: </label>
                            5 người
                        </div>
                        <div class="tour-start-date">
                            <label for="">Ngày bắt đầu: </label>
                            3/5/2022
                        </div>
                        <div class="tour-end-date">
                            <label for="">Ngày kết thúc: </label>
                            5/5/2022
                        </div>
                        <div class="tour-guide">
                            <label for="">Hướng dẫn viên:</label>
                            Phạm Thị Minh Châu
                        </div>
                    </div>

                </div>
                <div class="tour-item">
                    <div class="tour-image">
                        <img src="../public/img/images.jpg" alt="" srcset="">
                    </div>
                    <div class="tour-body">
                        <div class="tour-item-name">
                            <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tây Nguyên: Tà Nùng- Buôn Mê Thuật- Thác Dray Nu</a>
                        </div>
                        <div class="tour-from">
                            <label for="">Đi từ: </label>
                            Hà Nội
                        </div>
                        <div class="tour-to">
                            <label for="">Đi đến: </label>
                            Tây Nguyên
                        </div>
                        <div class="tour-min-person">
                            <label for="">Số người tối thiểu: </label>
                            2 người
                        </div>
                        <div class="tour-max-person">
                            <label for="">Số người tối đa: </label>
                            5 người
                        </div>
                        <div class="tour-start-date">
                            <label for="">Ngày bắt đầu: </label>
                            3/5/2022
                        </div>
                        <div class="tour-end-date">
                            <label for="">Ngày kết thúc: </label>
                            5/5/2022
                        </div>
                        <div class="tour-guide">
                            <label for="">Hướng dẫn viên:</label>
                            Phạm Thị Minh Châu
                        </div>
                    </div>

                </div>
                <div class="tour-item">
                    <div class="tour-image">
                        <img src="../public/img/images.jpg" alt="" srcset="">
                    </div>
                    <div class="tour-body">
                        <div class="tour-item-name">
                            <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tây Nguyên: Tà Nùng- Buôn Mê Thuật- Thác Dray Nu</a>
                        </div>
                        <div class="tour-from">
                            <label for="">Đi từ: </label>
                            Hà Nội
                        </div>
                        <div class="tour-to">
                            <label for="">Đi đến: </label>
                            Tây Nguyên
                        </div>
                        <div class="tour-min-person">
                            <label for="">Số người tối thiểu: </label>
                            2 người
                        </div>
                        <div class="tour-max-person">
                            <label for="">Số người tối đa: </label>
                            5 người
                        </div>
                        <div class="tour-start-date">
                            <label for="">Ngày bắt đầu: </label>
                            3/5/2022
                        </div>
                        <div class="tour-end-date">
                            <label for="">Ngày kết thúc: </label>
                            5/5/2022
                        </div>
                        <div class="tour-guide">
                            <label for="">Hướng dẫn viên:</label>
                            Phạm Thị Minh Châu
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="tour">
            <div class="tour-name">Du lịch hè</div>
            <div class="tour-info">Điểm đến thú vị, vui chơi thỏa thích</div>
            <div class="tour-detail">
                <div class="tour-item">
                    <div class="tour-image">
                        <img src="../public/img/images.jpg" alt="" srcset="">
                    </div>
                    <div class="tour-body">
                        <div class="tour-item-name">
                            <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tây Nguyên: Tà Nùng- Buôn Mê Thuật- Thác Dray Nu</a>
                        </div>
                        <div class="tour-from">
                            <label for="">Đi từ: </label>
                            Hà Nội
                        </div>
                        <div class="tour-to">
                            <label for="">Đi đến: </label>
                            Tây Nguyên
                        </div>
                        <div class="tour-min-person">
                            <label for="">Số người tối thiểu: </label>
                            2 người
                        </div>
                        <div class="tour-max-person">
                            <label for="">Số người tối đa: </label>
                            5 người
                        </div>
                        <div class="tour-start-date">
                            <label for="">Ngày bắt đầu: </label>
                            3/5/2022
                        </div>
                        <div class="tour-end-date">
                            <label for="">Ngày kết thúc: </label>
                            5/5/2022
                        </div>
                        <div class="tour-guide">
                            <label for="">Hướng dẫn viên:</label>
                            Phạm Thị Minh Châu
                        </div>
                    </div>

                </div>
                <div class="tour-item">
                    <div class="tour-image">
                        <img src="../public/img/images.jpg" alt="" srcset="">
                    </div>
                    <div class="tour-body">
                        <div class="tour-item-name">
                            <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tây Nguyên: Tà Nùng- Buôn Mê Thuật- Thác Dray Nu</a>
                        </div>
                        <div class="tour-from">
                            <label for="">Đi từ: </label>
                            Hà Nội
                        </div>
                        <div class="tour-to">
                            <label for="">Đi đến: </label>
                            Tây Nguyên
                        </div>
                        <div class="tour-min-person">
                            <label for="">Số người tối thiểu: </label>
                            2 người
                        </div>
                        <div class="tour-max-person">
                            <label for="">Số người tối đa: </label>
                            5 người
                        </div>
                        <div class="tour-start-date">
                            <label for="">Ngày bắt đầu: </label>
                            3/5/2022
                        </div>
                        <div class="tour-end-date">
                            <label for="">Ngày kết thúc: </label>
                            5/5/2022
                        </div>
                        <div class="tour-guide">
                            <label for="">Hướng dẫn viên:</label>
                            Phạm Thị Minh Châu
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
   require APPROOT . '/views/includes/footer.php';
?>
