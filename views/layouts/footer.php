<footer id="footer" class="footer"><!--Footer-->
    <div class="footer-bottom col-xs-12">
                <a href="/" class=" footer-info-1 col-xs-6">Businkam</a>
               <!--  <a href="" class="pull-right footer-info-2 col-xs-6">Instagram</a> -->
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>


 <!-- src="//code.jquery.com/jquery-2.1.1.min.js"></script> -->

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
</body>
</html>