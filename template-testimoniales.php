<?php 
/*
template name: testimoniales
*/
 ?>
<div class="bg-testimoniales">

<?php get_header();?>

<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick.css" />

<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick-style.css">



<style>

@media (max-width: 992px){

  .center {

    margin-right: 0% !important;

    margin-left: 0% !important;

  }

  .slick-next {

    right: -15px;

  }

  .slick-prev {

    left: 0px;

  }

}

@media only screen and (min-width:992px) and (max-width:1200px){

  .valign-wrapper {

    height: auto;

  }

}



</style>





<div class="animsition"

  data-animsition-in-class="fade-in-up-sm"

  data-animsition-in-duration="1000"

  data-animsition-out-class="fade-out-up-sm">



<div class="row nomargin bg-quienes4">

  <div class="valign-wrapper">

    <div class="col l12 m12 s12 valign">

      <div class="col l10 offset-l1 m12 s12">

        <div class="slider center">

          <div>

            <div class="col l6 m6 s12">

              <div class="col l12 s12 testimoniales">

                <p class="nomargin">

                  Testimoniales

                </p>

              </div>

              <div class="col l12 s12 offset top-50 img-testimonial">

                <a href="http://www.napifyapp.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/recursos/napify.png" title="Napify" alt="Legal Nest"></a>

              </div>

            </div>

            <div class="col l6 m6 s12 testimonio">

              <p>

                <strong>Napify</strong>

              </p>

              <p>

                Nos guiaron desde la creación de nuestra startup hasta la puesta en marcha de lo que hoy es Napify. Siempre accesibles y comprometidos con el negocio al que están apoyando. Sobre todo, un equipo transparente y abierto que entiende el idioma del emprendedor.

              </p>

            </div>

          </div>

          <div>

            <div class="col l6 m6 s12">

              <div class="col l12 s12 testimoniales">

                <p class="nomargin">

                  Testimoniales

                </p>

              </div>

              <div class="col l12 s12 offset top-50 img-testimonial">

                <a href="http://www.velosoft.mx" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/recursos/velosoft.png" title="Velosoft" alt="Legal Nest"></a>

              </div>

            </div>

            <div class="col l6 m6 s12 testimonio">

              <p>

                <strong>Velosoft S.A. de C.V.</strong>

              </p>

              <p>

                Han fungido como nuestro abogado de cabecera desde que surgió la idea de Velosoft hasta el día de hoy. Gracias a sus excelentes precios, disponibilidad y compromiso, LegalNest es parte fundamental del crecimiento y estabilidad de nuestra empresa.

              </p>

            </div>

          </div>

          <!-- -->

          <div>

            <div class="col l6 m6 s12">

              <div class="col l12 s12 testimoniales">

                <p class="nomargin">

                  Testimoniales

                </p>

              </div>

              <div class="col l12 s12 offset top-50 img-testimonial">

                <a href="http://a-001.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/recursos/d01.png" title="A-001" alt="Legal Nest"></a>

              </div>

            </div>

            <div class="col l6 m6 s12 testimonio">

              <p>

                <strong>A-001</strong>

              </p>

              <p>

                Hemos trabajado con LegalNest en diferentes tipos de proyectos y siempre han encontrado la mejor estructura desde un punto de vista de negocio y siempre cuidando todos los detalles legales. Excelente atención y tiempos de respuesta.

              </p>

            </div>

          </div>

          <!-- -->

          <!-- -->

          <div>

            <div class="col l6 m6 s12">

              <div class="col l12 s12 testimoniales">

                <p class="nomargin">

                  Testimoniales

                </p>

              </div>

              <div class="col l12 s12 offset top-50 img-testimonial">

                <a href="http://www.salcreativos.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/recursos/salcreativos.png" title="Sal Creativos" alt="Legal Nest"></a>

              </div>

            </div>

            <div class="col l6 m6 s12 testimonio">

              <p>

                <strong>Sal Creativos</strong>

              </p>

              <p>

                Una esquema súper atractivo, nos ayudan a resolver todos los temas legales de una manera muy clara. Tiene una gran disponibilidad.

              </p>

            </div>

          </div>

          <!-- -->

          <!-- -->

          <div>

            <div class="col l6 m6 s12">

              <div class="col l12 s12 testimoniales">

                <p class="nomargin">

                  Testimoniales

                </p>

              </div>

              <div class="col l12 s12 offset top-50 img-testimonial">

                <a href="http://circulobienesraices.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/recursos/cbr.png" title="Circulo Bienes Raices" alt="Legal Nest"></a>

              </div>

            </div>

            <div class="col l6 m6 s12 testimonio">

              <p>

                <strong>Círculo Bienes Raíces </strong>

              </p>

              <p>

                Un grupo de abogados excepcionalmente capaces, nos han ayudado desde cosas corporativas hasta proyectos inmobiliarios. 

              </p>

            </div>

          </div>

          <!-- -->	

        </div>

      </div>

    </div>

  </div>

</div>





</div>



<?php

  get_footer();

?>



<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>



</div>



<script>



$('.center').slick({

centerMode: true,

autoplay:true,

centerPadding: '0px',

slidesToShow: 1,

responsive: [

{

  breakpoint: 992,

  settings: {

    arrows: true,

    centerMode: true,

    centerPadding: '0px',

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

