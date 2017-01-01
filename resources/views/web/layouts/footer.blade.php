<div class="clearfix"></div>
<br>

<div class="footer-div-style">
    <div class="container">
        <div class="col-md-3">
            <h4 class="footer-head-style">Quick Link</h4>
            <ul class="footer-quick-ul">
                <li>HOME</li>
                <li>ABOUT US </li>
                <li>WHY US </li>
                <li>FAQ'S</li>
                <li>CANCELLATION POLICY</li>
                <li>CAREERS</li>
                <li>CONTACT US</li>
            </ul>

            <img src="images/credit-card.png" class="img-responsive">
        </div>
        <div class="col-md-2"> <img src="images/trip2.png" class="img-responsive">
            <br>
            <div class="widget-last-posts__item">
                <!-- Tripadviser -->

                <div id="TA_excellent59" class="TA_excellent">
                    <div id="CDSWIDEXC" class="widEXC">
                        <div class="bravoBox">
                            <div class="bravoWrapper">
                                <div class="bravoText"> Bravo! </div>
                            </div>
                            <img src="./support/transparent_pixel-11863-2.gif" height="1" width="1"> </div>
                        <br>
                        <div id="CDSWIDEXCLINK" class="widEXCLINK"> <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g295424-d2510773-Reviews-Dubai_Private_Tour-Dubai_Emirate_of_Dubai.html" onclick="ta.cds.handleTALink(11863,this);return true;" rel="nofollow">Dubai Private Tour rated "excellent" by 1,209 travelers</a><br>
                        </div>
                        <div class="widEXCTALOGO"> <a target="_blank" href="https://www.tripadvisor.com/"><img src="images/tripadvisor_logo_115x18.gif" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"></a> </div>
                    </div>
                    <!--/ cdsEXCBadge--> </div>
                <script src="./support/wejs"></script><script src="./support/WidgetEmbed-excellent"></script>
                <!-- end of tripadviser -->

                <div class="margin-top  margin-bottom" style="text-align:center"> <img src="images/100-percent-satisfaction.png" class="img-responsive img-mob"></div>
            </div>
        </div>
        <div class="col-md-4">
            <h4 class="footer-head-style">Facebook Updates</h4>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDubaiprivatetour-1200810873344965%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="300" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        <div class="col-md-3">
            <h4 class="footer-head-style">Contact Us</h4>
            <div class="footer-div-contact-styl">
                <div class="footer-contact-icon">
                    <div class="footer-icon-div"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                </div>
                <div class="footer-contact-text">
                    <ul class="footer-contact-ul-style">
                        <li>sdvfdsfdsfdsfsdf</li>
                        <li>sdfdsfdsfdsf</li>
                        <li>sdfdsfsdfsdfsdfdsf</li>
                    </ul>
                </div>

            </div>
            <div class="footer-div-contact-styl">
                <div class="footer-contact-icon">
                    <div class="footer-icon-div"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                </div>
                <div class="footer-contact-text">
                    <ul class="footer-contact-ul-style">
                        <li>sdvfdsfdsfdsfsdf</li>
                    </ul>
                </div>
            </div>
            <div class="footer-div-contact-styl">
                <div class="footer-contact-icon">
                    <div class="footer-icon-div"> <i class="fa fa-mobile" aria-hidden="true"></i> </div>
                </div>
                <div class="footer-contact-text">
                    <ul class="footer-contact-ul-style">
                        <li>sdvfdsfdsfdsfsdf</li>
                    </ul>
                </div>
            </div>
            <div class="footer-div-contact-styl">

                <div class="footer-contact-icon">
                    <div class="footer-icon-div"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                </div>
                <div class="footer-contact-text">
                    <ul class="footer-contact-ul-style">
                        <li>sdvfdsfdsfdsfsdf</li>
                    </ul>
                </div>
            </div>

            <div class="footer-social-icon">
                <div class="foot-soc-icon-div col-1"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                <div class="foot-soc-icon-div col-2"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                <div class="foot-soc-icon-div col-3"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                <div class="foot-soc-icon-div col-4"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                <div class="foot-soc-icon-div col-5"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                <div class="foot-soc-icon-div col-6"><i class="fa fa-youtube" aria-hidden="true"></i></div>
            </div>


        </div>
    </div>
</div>
<div class="copy-div-style">
    <p>© Dubai Private Tour, 2016.</p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script>
    (function($) {
        $.fn.menumaker = function(options) {
            var cssmenu = $(this), settings = $.extend({
                format: "dropdown",
                sticky: false
            }, options);
            return this.each(function() {
                $(this).find(".button").on('click', function(){
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.slideToggle().removeClass('open');
                    }
                    else {
                        mainmenu.slideToggle().addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').show();
                        }
                    }
                });
                cssmenu.find('li ul').parent().addClass('has-sub');
                multiTg = function() {
                    cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    cssmenu.find('.submenu-button').on('click', function() {
                        $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) {
                            $(this).siblings('ul').removeClass('open').slideToggle();
                        }
                        else {
                            $(this).siblings('ul').addClass('open').slideToggle();
                        }
                    });
                };
                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');
                if (settings.sticky === true) cssmenu.css('position', 'fixed');
                resizeFix = function() {
                    var mediasize = 700;
                    if ($( window ).width() > mediasize) {
                        cssmenu.find('ul').show();
                    }
                    if ($(window).width() <= mediasize) {
                        cssmenu.find('ul').hide().removeClass('open');
                    }
                };
                resizeFix();
                return $(window).on('resize', resizeFix);
            });
        };
    })(jQuery);

    (function($){
        $(document).ready(function(){
            $("#cssmenu").menumaker({
                format: "multitoggle"
            });
        });
    })(jQuery);
</script>
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script>

    $(document).ready(function($) {
        $("#owl-example").owlCarousel({
            //Autoplay
            items : 3,
            itemsMobile : [479,3],
            itemsTablet: [768,3],
            autoPlay : false,
            stopOnHover : false,
            // Navigation
            navigation : true,
            navigationText : ["<",">"],
            rewindNav : true,
            scrollPerPage : false,
            pagination : false,
            paginationNumbers: false,
            //Basic Speeds
            slideSpeed : 200,
            paginationSpeed : 800,
            rewindSpeed : 1000,


        });
    });

    $(document).ready(function($) {
        $("#owl-example2").owlCarousel({
            //Autoplay
            items : 4,
            itemsMobile : [479,3],
            itemsTablet: [768,3],
            autoPlay : false,
            stopOnHover : false,
            // Navigation
            navigation : true,
            navigationText : ["<",">"],
            rewindNav : true,
            scrollPerPage : false,
            pagination : false,
            paginationNumbers: false,
            //Basic Speeds
            slideSpeed : 200,
            paginationSpeed : 800,
            rewindSpeed : 1000,


        });
    });
    $(document).ready(function($) {
        $("#owl-example3").owlCarousel({
            //Autoplay
            items : 5,
            itemsMobile : [479,3],
            itemsTablet: [768,3],
            autoPlay : false,
            stopOnHover : false,
            // Navigation
            navigation : true,
            navigationText : ["<",">"],
            rewindNav : true,
            scrollPerPage : false,
            pagination : false,
            paginationNumbers: false,
            //Basic Speeds
            slideSpeed : 200,
            paginationSpeed : 800,
            rewindSpeed : 1000,


        });
    });

    $("body").data("page", "frontpage");

</script>

<script type='text/javascript'>
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('#scroll').fadeIn();
            } else {
                $('#scroll').fadeOut();
            }
        });
        $('#scroll').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });
</script>


</body>
</html>