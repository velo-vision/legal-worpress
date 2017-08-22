
<div class="bg-pricing">
<?php
/*
template name: princing
*/
  get_header();

?>



<div class="animsition"

  data-animsition-in-class="fade-in-up-sm"

  data-animsition-in-duration="1000"

  data-animsition-out-class="fade-out-up-sm">



<div class="row nomargin bg-quienes1">

  <div class="valign-wrapper">

    <div class="col l12 s12 valign">

      <div class="col l6 s12">

        <div class="col l12 s12 que-es">

          <p class="nomargin">

            Pricing <strong>Policy</strong>

          </p>

        </div>

        <div class="col l12 s12 que-es2 top-50">

          <p>

            La <b>transparencia y prácticas de cobro sencillas,</b> son parte de la esencia de nuestro negocio, <b>cobrar nuestros servicios por hora no nos hace sentido,</b> por lo mismo, siempre discutimos los costos <b>por adelantado y detalladamente.</b> Entendemos que estar revisando el reloj constantemente se interpone en una relación de confianza y colaboración. Creemos que para ser abogados efectivos hay que <b>mantener abiertas las líneas de comunicación</b> en todo momento, por lo mismo, contestamos preguntas breves, respondemos correos y mensajes sin cargos adicionales. <b>Siempre estamos disponibles</b> para juntarnos en nuestras oficinas o en el lugar que te convenga. LegalNest ofrece planes de <b>pago y cotizaciones flexibles</b> que se adapten a las necesidades específicas de cada cliente, incluyendo pago en línea, costos fijos para la elaboración de documentos, así como igualas mensuales acordadas por adelantado para proyectos y servicios de larga o indefinida duración.

          </p>

        </div>

      </div>

      <div class="col l6 s12 pc-pricing">

        <img src="<?php bloginfo('template_url'); ?>/images/recursos/pricing.png" title="Laptop Pricing" alt="LegalLest">

      </div>

    </div>

  </div>

</div>



</div>



<?php

  get_footer();

?>



</div>



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

