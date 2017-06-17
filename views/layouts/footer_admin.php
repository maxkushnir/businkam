
<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <p class="pull-left">Businkam © 2017</p>
                <p class="pull-right">Artynov School</p>
            </div>
        </div>
    </div>





<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<!-- <script src="/template/js/jquery.prettyPhoto.js"></script> -->
<script src="/template/js/main.js"></script>
<script src="/template/js/tools.js"></script>

<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</footer><!--/Footer-->
</html>