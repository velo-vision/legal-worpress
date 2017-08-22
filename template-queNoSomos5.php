<?php 
/*
template name: que no somos 5
*/
  get_header();
 ?>

<div class="animsition"

  data-animsition-in-class="fade-in-right-sm"

  data-animsition-in-duration="1000"

  data-animsition-out-class="fade-out-right-sm"

  data-animsition-out-duration="800">



<div class="row nomargin bg-quienes">

  <div class="valign-wrapper content-pro">

    <div class="col l12 s12 valign">

      <div class="col l12 nomargin">

        <div class="col l9 m12 s12">

          <div class="col l12 s12 nomargin">

            <div class="col l3 m5 s12 cuadro-1">

              <div class="col l10 offset-l1 s12">

                <p>

                  <strong>El esquema piramidal genera una revisión escalonada de cada asunto,</strong> desde el pasante hasta los socios.

                </p>

              </div>

            </div>

            <div class="col l1 m2 nomargin ocultar-linea">

              <div class="col l12 m12 nomargin">

                <img class="top-50" width="100%;" src="<?php bloginfo('template_url'); ?>/images/recursos/linea-1.png" alt="Legal Nest">

              </div>

            </div>

            <div class="col l3 m5 s12 cuadro-2">

              <div class="col l12 m12">

                <p>

                  Estos esquemas funcionan pero <strong>convierten los servicios legales en altamente costos.</strong>

                </p>

              </div>

            </div>

            <div class="col l1 m3 nomargin ocultar-linea">

              <div class="col l12 line-legal nomargin linea-display">

                <img class="top-50" width="100%;" src="<?php bloginfo('template_url'); ?>/images/recursos/linea-1.png" alt="Legal Nest">

              </div>

            </div>

            <div class="col l3 m6 s12 center title-legal">

              <p class="nomargin top-10">¿LegalNest?</p>

            </div>

            <div class="col l1 ocultar-linea linea1">

              <div class="col l12 nomargin">

                <img src="<?php bloginfo('template_url'); ?>/images/recursos/linea-2.png" alt="Legal Nest">

              </div>

            </div>

          </div>

          <div class="col l3 offset-l6 m12 s12 quienes-1 center">

            <p style="text-transform:none"><strong>¿Por qué?</strong></p>

          </div>

        </div>

        <div class="col l3 m8 offset-m2 s12">

          <div class="col l12 m12 s12 que-es2">

            <p class="nomargin">

              En LegalNest en lugar de establecer una jerarquía sobre las personas, tenemos

              un <strong>equipo multidinámico</strong> en el que se fomenta el liderazgo, ofrecemos calidad de

              trabajo y el atractivo de nuestra <strong>cultura abierta.</strong> Esto genera que las personas

              que trabajan con nosotros encuentren un ambiente relajado y funcional, y se

              traduce en <strong>mejor calidad de trabajo para nuestros clientes.</strong>

            </p>

          </div>

          <div class="col l12 m12 s12 center mobile">

            <img src="<?php bloginfo('template_url'); ?>/images/recursos/que-no5.png" title="Que no somos 2" alt="Legal Nest">

          </div>

        </div>

      </div>

      <div class="col l10 offset-l1 m12 s8 offset-s2 no-somos center top-50">

        <div class="col l2 offset-l1 m3 offset-m1 s6 offset-s3 hvr-float-shadow one">
           <a href="<?php echo site_url("?page_id=55");?>" class="animsition-link"> <!-- que no 1 -->
            <img src="<?php bloginfo('template_url'); ?>/images/recursos/firma.png" title="Firma Tradicional" alt="Legla Nest">

          </a>

        </div>

        <div class="col l2 m4 s12 hvr-float-shadow top-small">

          <a href="<?php echo site_url("?page_id=66");?>" class="animsition-link"><!-- que no 2 -->

            <img src="<?php bloginfo('template_url'); ?>/images/recursos/analisis.png" title="Análisis" alt="Legal Nest">

          <p class="nomargin">

            Análisis

          </p>

          <p class="nomargin">

            detallado de tu

          </p>

          <p class="nomargin">

            negocio

          </p></a>

        </div>

        <div class="col l2 m4 s12 hvr-float-shadow top-small">

         <a href="<?php echo site_url("?page_id=54");?>" class="animsition-link"><!-- que no 3 -->

            <img src="<?php bloginfo('template_url'); ?>/images/recursos/aliado.png" title="Aliado Comercial" alt="Legal Nest">

            <p class="nomargin">

              Aliado

            </p>

            <p class="nomargin">

              comercial

            </p>

            <p class="nomargin" style="visibility:hidden;">

              comercial

            </p>

          </a>

        </div>

        <div class="col l2 m4 offset-m2 s12 hvr-float-shadow top-somos top-small">

          <a href="<?php echo site_url("?page_id=74");?>" class="animsition-link"> <!-- que no 4 -->

            <img src="<?php bloginfo('template_url'); ?>/images/recursos/servicios.png" title="Servicio de consultoria integral" alt="Legla Nest">

            <p class="nomargin">

              Servicios de

            </p>

            <p class="nomargin">

              consultoría

            </p>

            <p class="nomargin">

              integral

            </p>

          </a>

        </div>

        <div class="col l3 m4 s8 offset-s2 hvr-bob top-somos top-small">

           <a href="<?php echo site_url("?page_id=70");?>" class="animsition-link"> <!-- que no 5 -->

            <img width="180px;" src="<?php bloginfo('template_url'); ?>/images/recursos/esquema2.png" title="Esquema Piramidal" alt="Legal Nest">

          </a>

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

    inClass: 'fade-in-right-sm',

    outClass: 'fade-out-right-sm',

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

