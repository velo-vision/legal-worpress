

<div class="degradado">

  <?php
  	include("head-3.php");
  ?>

<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">

  <div class="row nomargin">
    <div class="valign-wrapper content-startup">
      <div class="col l12 m12 s12 nomargin valign">
        <div class="col l12 m12 s12">
          <div class="col l4 m12 s12">
            <div class="col l12 m6 s12 titulo-rombos">
              <p class="nomargin">
                <strong>quiero empezar</strong>
              </p>
              <p class="nomargin">
                mi propia empresa
              </p>
            </div>
            <div class="col l12 m6 s12 titulo-rombos">
              <img src="images/recursos/avion-pyme.png" alt="Legal Nest">
            </div>
          </div>
          <div class="col l8 m12 s12 hide-on-med-only hide-on-small-only">
            <div class="boton1">
              <a href="pyme-home.php"><img class="hvr-rotate" src="images/recursos/boton-pyme.png" alt="Legla Nest"></a>
            </div>
            <div class="boton2">
              <a href="home-empresa.php"><img class="hvr-rotate" src="images/recursos/boton-empresa.png" alt="Legla Nest"></a>
            </div>
            <div class="boton3 hvr-pulse">
              <img class="hvr-rotate" src="images/recursos/boton-startup-full.png" alt="Legla Nest">
            </div>
            <div class="boton4">
              <a href="paquetes.php"><img class="hvr-rotate" src="images/recursos/boton-paquetes.png" alt="Legla Nest"></a>
            </div>
            <!-- <div style="display:inline-block" class="">
              <img src="images/recursos/boton-contactanos.png" alt="Legla Nest">
            </div> -->
          </div>
        </div>
        <div class="col l12 m10 offset-m1 s12">
          <div class="col l5 offset-l1 texto-rombos top-50">
            <p>
              Estás a punto de dar un paso muy importante para tu futuro, déjanos acompañarte en el proceso. LegalNest busca ser tu aliado durante todo el camino. <b>La consultoría legal en esta etapa es crítica e indispensable.</b>
            </p>
          </div>
          <div class="col l3 offset-l3 hide-on-med-only hide-on-small-only">
            <div class="boton5">
              <a href="contacto.php"><img class="hvr-rotate" src="images/recursos/boton-contactanos.png" alt="Legla Nest"></a>
            </div>
          </div>
        </div>
        <div class="col s12 bg-degradado-2 hide-on-large-only">
          <div class="col m12 s12 center">
            <div class="boton-full">
              <img class="hvr-rotate" src="images/recursos/boton-startup-full.png" alt="Legla Nest">
            </div>
          </div>
          <div class="col m12 s12 center">
            <div class="col m4 s6 boton-small">
              <a href="pyme-home.php"><img class="hvr-rotate" src="images/recursos/boton-pyme.png" alt="Legla Nest"></a>
            </div>
            <div class="col m4 s6 offset-m4 boton-small">
              <a href="home-empresa.php"><img class="hvr-rotate" src="images/recursos/boton-empresa.png" alt="Legla Nest"></a>
            </div>
          </div>
          <div class="col m12 s12 center">
            <div class="col m4 offset-m2 s6 boton-medium">
              <a href="paquetes.php"><img class="hvr-rotate" src="images/recursos/boton-paquetes.png" alt="Legla Nest"></a>
            </div>
            <div class="col m4 s6 boton-medium">
              <a href="contacto.php"><img class="hvr-rotate" src="images/recursos/boton-contactanos.png" alt="Legla Nest"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php
  include("footer-2.php");
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
});</script>
