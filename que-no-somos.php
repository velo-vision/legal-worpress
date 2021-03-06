


<?php
  require("functions.php");
  get_header();
?>

<div class="animsition"
  data-animsition-in-class="fade-in-right-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-right-sm"
  data-animsition-out-duration="800">

<div class="row nomargin bg-quienes">
  <div class="valign-wrapper  content-pro">
    <div class="col l12 m12 s12 valign">
      <div class="col l12 m12 s12 nomargin">
        <div class="col l4 m12 s12 que-es">
          <div class="col l8 offset-l2 m12 s12">
            <p class="nomargin">Lo que</p>
            <p class="nomargin"><strong>NO somos</strong></p>
          </div>
        </div>
        <div class="col l3 m6 s12 top-somos top-somos">
          <div class="col l7 offset-l2 m8 offset-m2 s8 offset-s2">
            <img width="100%" src="images/recursos/abogados.png" title="Firma tradicional de abogados" alt="LegalNest">
          </div>
        </div>
        <div class="col l4 m6 s12 que-es2 top-somos">
          <p>
            Cuando surge algo diferente las reglas cambian. Convencidos de que <strong>el esquema legal actual está desgastado,</strong> creamos <strong>LegalNest</strong>,
            un nuevo proyecto en el que queremos que nos identifiques por lo que somos, pero
            también <strong>queremos que conozcas lo que nos hace ser diferentes</strong> explicándote <strong>lo que No somos.</strong>
          </p>
        </div>
      </div>
      <div class="col l12 s12 quienes-1 center">
        <p style="text-transform:none"><strong>¿Por qué?</strong></p>
      </div>
      <div class="col l10 offset-l1 m12 s12 no-somos center top-50">
        <div class="col l4 m4 s8 offset-s2 hvr-bob">
          <a href="que-no-somos.php" class="animsition-link">
            <img src="images/recursos/firma-tradicional.png" title="Firma Tradicional" alt="Legla Nest">
          </a>
        </div>
        <div class="col l2 m4 s8 offset-s2 hvr-float-shadow top-small">
          <a href="que-no-somos-2.php" class="animsition-link">
            <img src="images/recursos/analisis.png" title="Análisis" alt="Legal Nest">
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
        <div class="col l2 m4 s8 offset-s2 hvr-float-shadow top-small">
          <a href="que-no-somos-3.php" class="animsition-link">
            <img src="images/recursos/aliado.png" title="Aliado Comercial" alt="Legal Nest">
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
        <div class="col l2 m4 offset-m2 s8 offset-s2 hvr-float-shadow top-somos top-small">
          <a href="que-no-somos-4.php" class="animsition-link">
            <img src="images/recursos/servicios.png" title="Servicio de consultoria integral" alt="Legla Nest">
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
        <div class="col l2 m4 s8 offset-s2 hvr-float-shadow top-somos top-small">
          <a href="que-no-somos-5.php" class="animsition-link">
            <img src="images/recursos/esquema.png" title="Esquema Piramidal" alt="LegalNest">
            <p class="nomargin">
              Adiós al
            </p>
            <p class="nomargin">
              esquema
            </p>
            <p class="nomargin">
              Piramidal
            </p>
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
