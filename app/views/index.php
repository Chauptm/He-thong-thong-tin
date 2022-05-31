<?php
   require APPROOT . '/views/includes/head.php';
?>
<?php
    require APPROOT . '/views/includes/navigation.php';
?>
<div id="index-container">

    <div class="index-image">
        <div class="index-body">
            <div class="index-content">
                <h1>Du lich theo phong cach rieng</h1>
                <h3>Trai nghiem tron ven - Gia ca phai chang.</h3>
            </div>
            <div class="index-form">
                <form action="" method="get">
                    <div class="add-to">
                            <i class="fas fa-map-marker-alt"></i>
                            <input type="text" name="add_to" id="add_to" placeholder="Ban muon di dau?">
                    </div>
                    <div class="date-time">
                        <div class="time">
                            <i class=""></i>
                            <input type="date" name="date" id="date">
                        </div>
                        <div class="add_from">
                            <i class="fas fa-plane"></i>
                            <input type="text" name="add_from" id="add_from" placeholder="Khoi hanh tu">
                        </div>
                        <div class="form-button">
                            <input type="button" value="Tim">
                        </div>
                    </div>
                </form>
                <div class="content-form">
                    <p>Tailor tour - Trai nghiem theo cach cua ban</p>
                    <input type="button" value="Dat tour rieng">
                </div>
            </div>
        </div>
    </div>
    <div class="index-select">
        <div class="select-item">
            <i class="fa fa-check-circle"></i>
            <p>Gia tour tot nhat</p>
        </div>
        <div class="select-item">
            <i class="fa fa-check-circle"></i>
            <p>Gia tour tot nhat</p>
        </div>
        <div class="select-item">
            <i class="fa fa-check-circle"></i>
            <p>Gia tour tot nhat</p>
        </div>
        <div class="select-item">
            <i class="fa fa-check-circle"></i>
            <p>Gia tour tot nhat</p>
        </div>

    </div>
</div>
