<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Instructores Fitness</title>
<link rel="icon" href="../img/favicon.png" type="image/png">
<link rel="shortcut icon" href="../img/favicon.ico" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-family: "Open Sans", sans-serif;
}
body {
	margin-top: 0px;
	margin-bottom: 0px;
}
</style>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="../js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/wow.js"></script>
<script type="text/javascript" src="../js/classie.js"></script>
<script src="../contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://www.facebook.com/Fitness-20-286850788472936/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '348988965827262');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=348988965827262&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>
<body>
<!--boton arriba-->
<?php include('plantilla_cursos/botonarriba.php')?>
<!--fin boton arriba-->
<header class="headerclases" id="header">
<div class="container">
         
        <h1 class="wow fadeInLeft delay-05s"><strong>BAILOTERAPIA</strong></h1>
        <div class="cabecera wow fadeInDown delay-09s"><a href="#" class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/zUBNPRZO6Yw" data-toggle="modal" data-target="#videoModal"><img src="../img/clases/zumba.jpg" alt="" title="HAZ CLICK PARA MIRAR EL VIDEO"></a></div>
        
        <!--div modal-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
        <!--fin div modal-->
        <hr>
        <p class="wow fadeInLeft delay-05s" style="font-size:16px">La bailoterapia consiste en hacer ejercicios llevados al baile, lo que te permite relajarte, disfrutar de la música, compartir, aprender, hacer bastante ejercicio cardiovascular,es un dialogo entre la música y el cuerpo que favorece la estabilidad emocional al elevar la producción de endorfinas, las cuales generan una sensación de placer y alegría con un impacto directo en los niveles de autoestima y motivación.</p>
        <hr>
         <!--botones-->
       <?php include ('plantilla_cursos/botones.php');?>
       <!--fin botones-->
        <a class="link1 animated fadeInUp delay-1s btn-lg video" href="#" data-video="https://www.youtube.com/embed/zUBNPRZO6Yw" data-toggle="modal" data-target="#videoModal" title="MIRA EL VIDEO"><span class="glyphicon glyphicon-play"  ></span></a>
        <!---->
        <?php include ('plantilla_cursos/enflink.php'); ?>
  </div>
</header>




<section class="main-section paddind paddindclase" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	
     
    <!--titulo tablas-->
    <?php include 'plantilla_cursos/titulotablas.php';?>
    <!--fin titulo tablas-->
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <br>
    <h3> </h3>
    <p class="wow fadeInLeft delay-05s" style="font-size:16px">some content</p>
  </div>
  <div id="menu1" class="tab-pane fade">
  <br>
    <h3>Menu 1</h3>
    <p class="wow fadeInLeft delay-05s" style="font-size:16px">Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
  <br>
    <h3>Menu 2</h3>
    <p class="wow fadeInLeft delay-05s" style="font-size:16px">Some content in menu 2.</p>
  </div>
   <div id="menu3" class="tab-pane fade">
   <br>
    <h3>Menu 3</h3>
    <p class="wow fadeInLeft delay-05s" style="font-size:16px">Some content in menu 2.</p>
  </div>
</div>
              
    </div>
</section><!--main-section-end--> 

<!--main-section client-part-end-->
<div class="c-logo-part"><!--c-logo-part-start-->
	<div class="container">
    	<ul>
        	<li><a href="http://www.latin-america.adidas.com/"><img src="../img/marcas/adidas.jpg" alt=""></a></li>
            <li><a href="https://www.everlast.com"><img src="../img/marcas/everlast.png" alt=""></a></li>
            <li><a href="https://www.nike.com/xl/es_la/"><img src="../img/marcas/nike.jpg" alt=""></a></li>
            <li><a href="http://global.puma.com/en_EC/home/?locale=es_EC&mktID=PL:Brand%20Marketing:Puma.com-CatchAllPage:Equador-es&plinkID=Brand"><img src="../img/marcas/puma.png" alt=""></a></li>
            <li><a href="http://www.reebok.com/international/"><img src="../img/marcas/reebook.png" alt=""></a></li>
    	</ul>
	</div>
</div><!--c-logo-part-end-->
<!--main-section team-end-->

<!--inicio carrusel-->

<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../img/Bailoterapia/bailoterapia.jpg"  class="img-responsive" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="../img/Bailoterapia/bailoterapia en parques.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item active">
      <img src="../img/Bailoterapia/zumba fitness.jpg"  class="img-responsive" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<!--fin carrusel-->

<!--whatsapp -->
<?php include 'plantilla_cursos/whatsapp.php'; ?>
<!--fin whatsapp-->
<!--footer>-->

<?php include 'plantilla_cursos/footer.php';?>

<!--fin footer-->

<!--pruebas -->


<!--fin pruebas -->



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
<!--boton ir arriba-->
/*$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 2000);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
 
});*/
<!--fin ir arriba-->
<!--modal video-->
 $(function() {
    $(".video").click(function () {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });
  });
<!--fin modal video-->
</script>

</body>
</html>
