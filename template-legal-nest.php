<?php 
/*
template name: porque legal
*/
 ?>

 <div class="bg-legal">
<?php
  get_header();
?>

  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css" />
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick-style.css">

  <div class="animsition" data-animsition-in-class="fade-in-up-sm" data-animsition-in-duration="1000" data-animsition-out-class="fade-out-up-sm">
    <div class="row nomargin bg-quienes bg-quienes23">
        <div class="col l12 s12 ">
          <div class="col l12 s12 porque">
            <p class="nomargin">
              ¿Por qué
            </p>
            <p class="nomargin">
              <strong>LegalNest?</strong>
            </p>
          </div>
          <div class="col s10 offset-l1 content-slide">
            <div class="slider center">
            <div><h3><img style="width:100px!important;margin:20px auto;" src="<?php bloginfo('template_url'); ?>/images/legal/6.png" alt=""></h3>
                  <p class="nomargin top-30">Nuestros precios están al menos</p>
                  <p class="nomargin">30% abajo que los</p>
                  <p class="nomargin">precios del mercado.</p>
              </div>
              <div><h3><img style="width:100px!important;margin:20px auto;" src="<?php bloginfo('template_url'); ?>/images/legal/5.png" alt=""></h3>
                  <p class="nomargin top-30">El 90% de los startups</p>
                  <p class="nomargin">deciden no contratar servicios</p>
                  <p class="nomargin">legales.</p>
              </div>
              <div><h3><img style="width:100px!important;margin:20px auto;" src="<?php bloginfo('template_url'); ?>/images/legal/1.png" alt=""></h3>
                  <p class="nomargin top-30">El 75% de los startups</p>
                  <p class="nomargin">cierran al segundo año</p>
                  <p class="nomargin">de operación.</p>
              </div>
              <div><h3><img style="width:100px!important;margin:20px auto;" src="<?php bloginfo('template_url'); ?>/images/legal/cobramos.png" alt=""></h3>
                  <p class="nomargin top-30">Cobramos por ejecución,</p>
                  <p class="nomargin">no por hora</p>
              </div>          
              <div>
                <h3><img style="width:100px!important;margin:20px auto;" src="<?php bloginfo('template_url'); ?>/images/legal/2.png" alt=""></h3>
                  <p class="nomargin top-30">Te ofrecemos herramientas</p>
                  <p class="nomargin">tecnológicas y líneas de comunicación</p>
                  <p class="nomargin">directa para un servicio más eficiente</p>
              </div>
              <div>
                <h3><img style="width:100px!important;margin:20px auto;" src="<?php bloginfo('template_url'); ?>/images/legal/3.png" alt=""></h3>
                  <p class="nomargin top-30">Buscamos ser tu consejero</p>
                  <p class="nomargin">y generar una relación</p>
                  <p class="nomargin">estable y de confianza</p>
              </div>
              <div><h3><img style="width:100px!important;margin:20px auto;" src="<?php bloginfo('template_url'); ?>/images/legal/costos_claros.png" alt=""></h3>
                  <p class="nomargin top-30">Costos claros para</p>
                  <p class="nomargin">una relación larga</p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>


<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
<!-- <script type="text/javascript" src="http://kenwheeler.github.io/slick/js/prism.js"></script> -->
</div>

<script>

$('.center').slick({

centerMode: true,

autoplay:true,

autoplaySpeed:6000,

centerPadding: '50px',

slidesToShow: 3,

responsive: [

  {

    breakpoint: 1100,

    settings: {

      arrows: true,

      centerMode: true,

      centerPadding: '35px',

      slidesToShow: 3

    }

  },

  {

    breakpoint: 992,

    settings: {

      arrows: true,

      centerMode: true,

      centerPadding: '40px',

      slidesToShow: 1

    }

  },

  {

    breakpoint: 768,

    settings: {

      arrows: true,

      centerMode: true,

      centerPadding: '0px',

      slidesToShow: 1

    }

  },

  {

    breakpoint: 480,

    settings: {

      arrows: true,

      centerMode: true,

      centerPadding: '0px',

      slidesToShow: 1

    }

  }

]

});

  </script>



<script>

$(document).ready(function() {

  $(".animsition").animsition({

    inClass: 'fade-in-up-sm',

    outClass: 'fade-out-up-sm',

    inDuration: 1500,

    outDuration: 800,

    linkElement: '.animsition-link',

    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'

    loading: true,

    loadingParentElement: 'body', //animsition wrapper element

    loadingClass: 'animsition-loading',

    loadingInner: '', // e.g '<img src="loading.svg" />'

    timeout: false,

    timeoutCountdown: 5000,

    onLoadEvent: true,

    browser: [ 'animation-duration', '-webkit-animation-duration'],

    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.

    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

    overlay : false,

    overlayClass : 'animsition-overlay-slide',

    overlayParentElement : 'body',

    transition: function(url){ window.location.href = url; }

  });

});

</script>

