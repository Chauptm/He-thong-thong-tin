</body>
<script>
    $(".top-nav ul li").on('click', function(){
        $(".top-nav ul li .active").removeClass('.active');
        $(this).addClass(".active");
    })
</script>
</html>