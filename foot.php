
<div id="footer" style="background-color:#7A8B8B">
 <div class="container">
  <div class="row">

<div class="col-md-10">
  <ul class="fmenu">
<!--    <li><a href="index.php">Home</a></li>
   <li><a href="about.php">About Us</a></li>
   <li><a href="faq.php">Frequently Asked</a></li>
  
   <li><a href="contact.php">Contact Us</a></li> -->
 </ul>
 <div class="copyright">The Spiral Vault. © All rights reserved.</div>
</div>

<div class="col-md-2">
<div class="hidden">
 <ul>
  <li><a class="f_facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
  <li><a class="f_twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
 </ul>
</div>
</div>

</div>

 </div>
</div>
						
			<script src="assets/js/jquery-1.12.4.min.js"></script>
        <!-- animations -->
       <script src="assets/js/animations.min.js" type="text/javascript"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>	
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>			
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>		
		<!-- jquery inview js -->
			<script src="assets/js/jquery.inview.min.js"></script>	
		<!-- JQuery Knob -->
		<!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
			<script src="assets/js/jquery.knob.js"></script>
		<!-- WayPoints JS -->
			<script src="assets/js/waypoints.min.js"></script>
		<!-- jquery mixitup min js -->
			<script src="assets/js/jquery.mixitup.js"></script>
         <!-- jquery venobox min js -->
			<script src="assets/js/venobox.min.js"></script> 	
        <!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>   
                
		    <!-- Calculator -->  
			<script src="assets/js/scripts.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/iziModal.min592e592e.js?ver=3"></script>
            
			<script src="assets/js/tabtab.min.js"></script>
            <script src="assets/js/parallax.min.js"></script>
            <script src="assets/js/calculator.js"></script>
            
        <!-- Header animation -->    
        <script src="assets/js/TweenLite.min.js"></script>
		<script src="assets/js/EasePack.min.js"></script>
        <script src="assets/js/demo-1.js"></script>



<script>
    $(document).ready(function () {
        $('.acc-item').click(function () {
            if ($(this).hasClass('active')) {
                $(this).find('p').slideUp();
                $(this).removeClass('active');
                $('.fea-items').removeClass('active');
            } else {
                $('.acc-item').removeClass('active');
                $('.acc-item p').slideUp();
                $(this).find('p').slideToggle();
                $(this).toggleClass('active');
                $('.fea-items').removeClass('active');
            }
            if ($(this).is('#a-item1') && $(this).hasClass('active')) {
                $('#f-item1').addClass('active');
            } else if ($(this).is('#a-item2') && $(this).hasClass('active')) {
                $('#f-item2').addClass('active');
            } else if ($(this).is('#a-item3') && $(this).hasClass('active')) {
                $('#f-item3').addClass('active');
            } else if ($(this).is('#a-item4') && $(this).hasClass('active')) {
                $('#f-item4').addClass('active');
            } else if ($(this).is('#a-item5') && $(this).hasClass('active')) {
                $('#f-item5').addClass('active');
            }
        });
        $('.fea-items').mouseover(function () {
            if (!$(this).hasClass('active')) {
                $('.fea-items').removeClass('active');
                $('.acc-item').removeClass('active');
                $('.acc-item p').slideUp();
                if ($(this).is('#f-item1')) {
                    $(this).addClass('active');
                    $('#a-item1').find('p').slideToggle();
                    $('#a-item1').toggleClass('active');
                } else if ($(this).is('#f-item2')) {
                    $(this).addClass('active');
                    $('#a-item2').find('p').slideToggle();
                    $('#a-item2').toggleClass('active');
                } else if ($(this).is('#f-item3')) {
                    $(this).addClass('active');
                    $('#a-item3').find('p').slideToggle();
                    $('#a-item3').toggleClass('active');
                } else if ($(this).is('#f-item4')) {
                    $(this).addClass('active');
                    $('#a-item4').find('p').slideToggle();
                    $('#a-item4').toggleClass('active');
                } else if ($(this).is('#f-item5')) {
                    $(this).addClass('active');
                    $('#a-item5').find('p').slideToggle();
                    $('#a-item5').toggleClass('active');
                }
            }
        });
        $('.slick-carousel').slick({
            centerMode: true,
            slidesToShow: 6,
            dots: true,
            arrows: false,
            variableWidth: true,
            speed: 1000,
            variableHeight: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 5000,
            draggable: false,
            centerPadding: 0,
            focusOnSelect: true
        });
	
        $("#modal-calculator").iziModal({
            radius: 3,
            overlayColor: 'rgba(0, 0, 0, 0.85)',
            transitionIn: 'fadeIn',
        });
        $(document).on('click', '.calc', function (event) {
            event.preventDefault();
            $('#modal-calculator').iziModal('open');
        });
    });
</script>



<!-- Live Price 
 <script src="assets/js/bitcoinprices.js"></script>
 <script>
    (function () {
        $(".responsive-nav").click(function () {
            return $(".responsive-nav").addClass("cross");
        });
        $(".st-pusher").click(function () {
            $('.responsive-nav').removeClass('cross');
        });
        $.get("https://api.coinmarketcap.com/v1/ticker/?limit=20", function (data) {
            for (var i = 0; i < data.length; i++) {
                if (data[i].id == "bitcoin") {
                    $(".btcLive").text(parseFloat(data[i].price_usd).toFixed(2) + " USD");
                } else if (data[i].id == "ethereum") {
                    $(".ethLive").text(parseFloat(data[i].price_usd).toFixed(2) + " USD");
                } else if (data[i].id == "litecoin") {
                    $(".ltcLive").text(parseFloat(data[i].price_usd).toFixed(2) + " USD");
                } else if (data[i].id == "bitcoin-cash") {
                    $(".bchLive").text(parseFloat(data[i].price_usd).toFixed(2) + " USD");
                } else if (data[i].id == "dash") {
                    $(".dashLive").text(parseFloat(data[i].price_usd).toFixed(2) + " USD");
                } else if (data[i].id == "dogecoin") {
                    $(".dogeLive").text(parseFloat(data[i].price_usd).toFixed(6) + " USD");
                }
            }
        });
    }).call(this);
</script>
<script src="//code.tidio.co/4heqzsb5f8zcxaowb76dvg7b4vocfspc.js" async></script>-->



<script>
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';

    document.getElementById('lblGreetings').innerHTML =
        '<b>' + greet + ' <?php echo $acctname;?>' +'</b>,  Welcome to your Account!';
</script>
<script src="sweetalert/sweetalert.min.js"></script>
  <script src="sweetalert/sweetalert.js"></script>


  </body>
 
</html>
