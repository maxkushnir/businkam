<?php include ROOT . '/views/layouts/header.php'; ?>

        <link href="/template/css/slider-def.css" rel="stylesheet">

<style type="text/css">

</style>
<section>

    <div class="container">
       <!--  <div class="line"></div> -->

        <!-- Слайдер -->
 <div id="slider">
      <div class="slides">
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
            </div>
          </div>
          <div class="image">
            <img src="/template/images/slider/1.jpg">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
            </div>
          </div>
          <div class="image">
            <img src="/template/images/slider/2.jpg">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
            </div>
          </div>
          <div class="image">
            <img src="/template/images/slider/3.jpg">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
            </div>
          </div>
          <div class="image">
            <img src="/template/images/slider/4.jpg">
          </div>
        </div>
      </div>
      <div class="switch">
        <ul>
          <li>
            <div class="on"></div>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>

    <!-- Сітка рекомендованих товарів -->
        <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">НАШІ РОБОТИ</h2>

                    <?php foreach ($sliderProducts as $product): ?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper wrap-product">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                       <a href="/product/<?php echo $product['id']; ?>"> <img src="<?php echo Product::getImage($product['id']); ?>" class="hvr-grow" alt=""/>
                                  <!-- <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В кошик</a> -->
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img id="product-new-label" src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div><!--features_items-->  



<!-- SCRIPTS -->
        
        


</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>