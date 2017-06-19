<?php include ROOT . '/views/layouts/header.php'; ?>
<body>
<style type="text/css">
.product-image-wrapper{
    display:flex;
    justify-content:space-around;
    align-items: center;
    align-content: space-around;
}
img {
    max-width: 100%;
    height: auto;
}
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
       <!--  <div class="line"></div> -->

        <div class="slider">
            <div><a href="/blog/article-3"><img src="/template/images/slider/3.jpg"></a></div>
            <div><a href="/blog/article-3"><img src="/template/images/slider/4.jpg"></a></div>
            <div><a href="/blog/article-3"><img src="/template/images/slider/1.jpg"></a></div>
        </div>
        <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">НАШІ РОБОТИ</h2>

                    <?php foreach ($sliderProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                       <a href="/product/<?php echo $product['id']; ?>"> <img src="<?php echo Product::getImage($product['id']); ?>" class="hvr-grow" alt=""/>
                                  <!-- <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В кошик</a> -->
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div><!--features_items-->  



<!-- SCRIPTS -->
        
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
                autoplaySpeed: 5000,
                // arrows: false
            }); 
        </script>

  

</section>
</body>

<?php include ROOT . '/views/layouts/footer.php'; ?>