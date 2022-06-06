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
            <div class="tour-name">Du lich he</div>
            <div class="tour-info">Diem den thu vi, vui choi thoa thich</div>
            <div class="tour-detail">
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
            </div>
        </div>
        <div class="tour">
            <div class="tour-name">Du lich he</div>
            <div class="tour-info">Diem den thu vi, vui choi thoa thich</div>
            <div class="tour-detail">
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
                <div class="tour-item">
                    <div class="tour-item-name">
                        <a href="<?php echo URLROOT; ?>/tours/detail?id=1">Tour Tay Nguyen 3N3D: Ta Dung- Buon Me Thuat - Thac Dray Nu </a>
                    </div>
                    <div class="tour-from">
                        <label for="">Di tu: </label>
                        Ha Noi
                    </div>
                    <div class="tour-to">
                        <label for="">Den: </label>
                        Tay Nguyen
                    </div>
                    <div class="tour-min-person">
                        <label for="">So nguoi toi thieu: </label>
                        2 nguoi
                    </div>
                    <div class="tour-max-person">
                        <label for="">So nguoi toi da: </label>
                        5 nguoi
                    </div>
                    <div class="tour-start-date">
                        <label for="">Ngay bat dau: </label>
                        3/5/2022
                    </div>
                    <div class="tour-end-date">
                        <label for="">Ngay ket thuc: </label>
                        5/5/2022
                    </div>
                    <div class="tour-guide">
                        <label for="">Huong dan vien:</label>
                        Pham Thi Minh Chau
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
   require APPROOT . '/views/includes/footer.php';
?>
