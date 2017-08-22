
<?php
  require("functions.php");
  get_header();
?>

<div class="animsition"
  data-animsition-in-class="fade-in-right-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-right-sm"
  data-animsition-out-duration="800">

<div class="row nomargin content-pro">
  <div class="valign-wrapper">
    <div class="col l12 s12 valign">
      <div class="col l12 m12 s12 nomargin">
        <div class="col l3 m4 s12 paquete-startup center">
          <p class="nomargin top-10"><strong>PAQUETE</strong> <span>1</span></p>
          <p class="nomargin top-10">startup</p>
        </div>
        <div class="col l2 m2 s3 paquete-numero top-50 center">
          <a href="paquete-1.php">
            <p class="nomargin top-10">paquete</p>
            <p class="nomargin top-10"><span>1</span></p>
          </a>
        </div>
        <div class="col l2 m2 s3 paquete-numero top-50 center">
          <a href="paquete-2.php">
            <p class="nomargin top-10">paquete</p>
            <p class="nomargin top-10">2</p>
          </a>
        </div>
        <div class="col l2 m2 s3 paquete-numero top-50 center">
          <a href="paquete-3.php">
            <p class="nomargin top-10">paquete</p>
            <p class="nomargin top-10">3</p>
          </a>
        </div>
        <div class="col l2 m2 s3 paquete-numero top-50 center">
          <a href="paquete-4.php">
            <p class="nomargin top-10">paquete</p>
            <p class="nomargin top-10">4</p>
          </a>
        </div>
      </div>
      <div class="col l12 m12 s12 center top-50">
        <div class="col l3 m3 s12 startup-paquete">
          <div class="col l12 m12 s12">
            <p><strong>constitutiva</strong></p>
          </div>
          <div class="col l12 m12 s12">
            <img src="images/paquetes/constitutiva.png" title="Constitutiva" alt="Legal Nest">
          </div>
          <div class="col l10 offset-l1 m12 s12">
            <p>La base para empezar tu negocio.  Aquí están las reglas que administran tu empresa.</p>
          </div>
        </div>
        <div class="col l3 m3 s12 startup-paquete">
          <div class="col l12 m12 s12">
            <p><strong>RFC/FIEL/CIEC</strong></p>
          </div>
          <div class="col l12 m12 s12">
            <img src="images/paquetes/rfc.png" title="RFC" alt="Legal Nest">
          </div>
          <div class="col l10 offset-l1 m12 s12">
            <p>Indispensables para el cumplimiento de obligaciones ante el SAT</p>
          </div>
        </div>
        <div class="col l3 m3 s12 startup-paquete">
          <div class="col l12 m12 s12">
            <p><strong>marca</strong></p>
          </div>
          <div class="col l12 m12 s12">
            <img src="images/paquetes/marca.png" title="Marca" alt="Legal Nest">
          </div>
          <div class="col l10 offset-l1 m12 s12">
            <p>Registro de tu marca. Estudiamos las probabilidades de éxito y las clases correspondientes para realizar el registro.</p>
          </div>
        </div>
        <div class="col l3 m3 s12 startup-paquete">
          <div class="col l12 m12 s12">
            <p><strong>asesoría legal</strong></p>
          </div>
          <div class="col l12 m12 s12">
            <img src="images/paquetes/legal.png" title="Asesoría Legal" alt="Legal Nest">
          </div>
          <div class="col l10 offset-l1 m12 s12">
            <p>Siempre estamos disponibles para resolver cualquier duda que tengas.</p>
          </div>
        </div>
      </div>
      <div class="col l12 m12 s12">
        <div class="col l2 offset-l5 m3 offset-m5 s12">
          <a href="contacto.php"><p class="contacto-paquete">Contacto</p></a>
        </div>
      </div>
      <div class="col l12 m12 s12">
        <div class="boton-volver">
          <a href="startup-home.php"><img src="images/paquetes/volver.png" title="Botón Volver" alt="Legal Nest"></a>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

<?php
  get_footer();
?>


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
