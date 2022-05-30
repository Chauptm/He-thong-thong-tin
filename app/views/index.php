<?php
   require APPROOT . '/views/includes/head.php';
?>
<?php
    require APPROOT . '/views/includes/navigation.php';
?>
<div id="index-container">

    <div class="index-image">
       <div class="index-content">
           <h1>Du lich theo phong cach rieng</h1>
           <h3>Trai nghiem tron ven - Gia ca phai chang.</h3>
       </div>
       <form action="" method="get">
           <div class="add-to">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="add_to" id="add_to" placeholder="Ban muon di dau">
           </div>
            <div class="date-time">
                <div class="time">
                    <i class=""></i>
                    <input type="date" name="date" id="date">
                </div>
                <div class="add_from">
                    <i class=""></i>
                    <section id="add_from">
                        <option value="1">Ha Noi</option>
                        <option value="2">Ho Chi Minh</option>
                        <option value="3"></option>
                        <option value="4"></option>
                        <option value="5"></option>
                        <option value="6"></option>
                    </section>
                </div>
            </div>
       </form>
    </div>
</div>
