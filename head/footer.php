<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ADDRESS | 住所</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>住所:</strong> 1F Unga House, Westlands<br>Nairobi, Kenya
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>メール: </strong> info@dodoworld.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>ウェブサイト:</strong> www.dodoworld.com
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>:</strong> +254 721 381 298 <br>
                        <strong>:</strong> +254 20 445 0015
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>OUR COMPANY | 当社</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="aboutus.php">私たちに関しては</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="index.php#clients">クライアント</a></li>
                        <li><a href="blog.php">ブログ</a></li>
                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                <h4>ARCHIVES</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">December 2015 (1)</a></li>
                        <li><a href="#">November 2015 (5)</a></li>
                        <li><a href="#">October 2015 (8)</a></li>
                        <li><a href="#">September 2015 (10)</a></li>
                        <li><a href="#">August 2015 (29)</a></li>
                        <li><a href="#">July 2015 (1)</a></li>
                        <li><a href="#">June 2015 (31)</a></li>
                    </ul>
                </div>
            </div>
            <!--End Archives-->
    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2016 <a target="_blank" href="http://dodoworld.com/" title="">DoDoWorld</a>. All Rights Reserved. <br>
                Site Developed & Maintained By <a href="http://www.fairtechglobal.com">FluidTech Global</a>
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->

    <script id="dsq-count-scr" src="//EXAMPLE.disqus.com/count.js" async></script>
</body>
</html>
