<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Make Me Digital - Digital Agency located in Bendigo and servicing surrounding areas, producing high quality websites</title>
<link rel="icon" href="../favicon.png" type="image/png">
<link rel="shortcut icon" href="../favicon.ico" type="img/x-icon">

<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600" rel="stylesheet" type="text/css">

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../mmd.css" rel="stylesheet" type="text/css">
<link href="../mobile.css" rel="stylesheet" type="text/css">
<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="../js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/wow.js"></script>
<script type="text/javascript" src="../js/classie.js"></script>
<script type="text/javascript" src="../js/mmd.js"></script>

<!--[if lt IE 9]>
    <script src="../js/respond-1.1.0.min.js"></script>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/html5element.js"></script>
<![endif]-->

<script src="../js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="../css/component.css">
</head>
    <body>
        <div style="overflow:hidden;">
        </div>
        <?php require_once('m-nav.html'); ?>
        <div class="service">
            <i class="fa fa-code fa-3x"></i>
            <h5>Web Development</h5>
            <p>Specialising in Wordpress and HTML5 websites, we can help bring your business into the 21st century.</p>
            <p>We take the time to understand your needs and work with you to develop the solution.</p>
            <p>By meeting with you to discuss your requirements, we are then able to set about creating a pixel-perfect website that exceeds your expectations.</p>
            <p>Contact us today to start your digital journey.</p>
            <img src="../img/web.jpg" alt="Make Me Digital - Web Design and Development">
        </div>
        <div class="service">
            <i class="fa fa-pencil fa-3x"></i>
            <h5>Graphic Design</h5>
            <p>First impressions are important!</p>
            <p>Our goal is to ensure that everyone's first impression of your business is a positive one.</p>
            <p>By observing the latest trends, we endeavour to produce a modern and effective website.</p>
            <p>Having a specialist Graphic Designer working with a specialist Web Developer ensures a balance of visual appeal and functionality.</p>
            <p>Every business has a story to tell, contact us today to start your first chapter.</p>
            <img src="../img/graphic-design.jpg" alt="Make Me Digital - Graphic Design">
        </div>
        <div class="service">
            <i class="fa fa-facebook fa-3x"></i>
            <h5>Social Media</h5>
            <p>Social Media is an excellent platform for your business to engage potential clients.</p>
            <p>With the ability to specifically target a local audience, you can increase your brands awareness and reach.</p>
            <p>Eye-catching campaigns are an effective method of advertising on social media platforms.</p>
            <p>Allow us to help your business reach its online potential.</p>
            <img src="../img/social-media.jpg" alt="Make Me Digital - Social Media">
        </div>
        <div class="service">
            <i class="fa fa-building-o fa-3x"></i>
            <h5>Branding &amp; Identity</h5>
            <p>Help people identify with your brand through promotional items. We can design and produce your businesses promotional needs.</p>
            <p>Our range includes internal items such as general stationary, flyers, pull-up banners and signage. External promotional materials include feather banners, sidewalk signage, or even vehicle advertising.</p>
            <p>These items are designed to have maximum impact and visual appeal for your business.</p>
            <p>Contact us today to see how we can help build your business and brand.</p>
            <img src="../img/branding-identity.png" alt="Make Me Digital - Branding and Identity">
        </div>
        <footer class="footer clearfix serv-footer">
            <div class="splat-down"></div>
            <div class="footer-logo"><a href="http://www.makemedigital.com.au"><img src="http://www.makemedigital.com.au/img/mmd_logo_white_no_shadow.png" alt="Make Me Digital logo"></a></div>
            <span class="copyright">Copyright &copy; 2016 | <a href="http://makemedigital.com.au/">Make Me Digital</a>.</span>
            <span class="copyright"><a href="../privacy.php">Privacy Policy</a> | <a href="../terms.php">Terms of Use</a>.</span>
        </footer>
    </body>
    <script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();

  </script>


<script type="text/javascript">
	$(window).load(function(){

		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){


  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;


  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });

  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }

  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
         });
         return false;
    });

});

</script>
</html>
