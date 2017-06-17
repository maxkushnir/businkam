<?php include ROOT . '/views/layouts/header.php'; ?>
<body>
<style type="text/css">
    .slider{
        margin:1%;
    }
    .line{
        display: block;
        position:relative;
        margin-top:10px;
        border-bottom: 2px solid #AFAFAF;
        line-height: 2px;
        max-width: 100%;
        position:relative;
    }
</style>
<section>

    <div class="container">
        <div class="line"></div>

        <div class="slider">
            <div><img src="/template/images/slider/3.jpg"></div>
            <div><img src="/template/images/slider/4.jpg"></div>
            <div><img src="/template/images/slider/1.jpg"></div>
        </div>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="template/js/slick.min.js"></script>
        <script type="text/javascript">
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 5000
            }); 
        </script>

  

</section>
</body>

<?php include ROOT . '/views/layouts/footer.php'; ?>