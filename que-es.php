

<?php
  require("functions.php");
  get_header();
?>

<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">

<div class="row nomargin bg-quienes">
  <div class="valign-wrapper">
    <div class="col l12 s12 valign">
      <div class="col l6 m10 offset-m1 s12 top-50">
        <div class="col l10 offset-l1 m12 s12 que-es">
          <p class="nomargin">¿Qué es</p>
          <p class="nomargin"><strong>LegalNest?</strong></p>
        </div>
        <div class="col l10 offset-l1 que-es2 top-50">
          <p>
            LegalNest es una <b>iniciativa</b> que tiene por objetivo  proporcionar <b>servicios legales</b>  de modo sencillo, atractivo y concreto, que no impliquen un proceso complejo, burocrático y tedioso. <b>Al iniciar una empresa, o al desarrollar nuevos proyectos,</b> no debemos  alejarnos de la consultoría legal, por eso creamos LegalNest, porque <b>conocemos la gran importancia que representan los servicios legales en la creación,  desarrollo y promoción  de los negocios: grandes, medianos y pequeños.</b> Somos una alternativa honesta, transparente y práctica que se esfuerza por <b>evitar la complejidad y los altos costos</b> en la prestación de los servicios de consultoría  legal.
          </p>
        </div>
      </div>
      <div class="col l6 m6 offset-m3 s12 center imagen-somos">
        <div class="col l10 offset-l1 imagen-que">
          <img src="images/recursos/que-es.png" title="Quiénes Somos" alt="LegalNest">
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
