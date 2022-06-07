</body>
<script>
    $(".top-nav ul li").on('click', function(){
        $(".top-nav ul li .active").removeClass('.active');
        $(this).addClass(".active");
    })
</script>

<script>
    $(function() {
        $("form .tour-right-price input").after('<div class="inc button">+</div>');
        $("form .tour-right-price input").before('<div class="dec button">-</div>');
    });

    $(".button").on("click", function() {

        var $button = $(this);
        var oldValue = $button.parent().find("#tour-person").val();

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
        // Don't allow decrementing below zero
        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
        }

        $button.parent().find("#tour-person").val(newVal);

    });
</script>
</html>