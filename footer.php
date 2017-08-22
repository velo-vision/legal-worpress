<?php 
/*
</div>

<div id="footerbox">
<div id="footerpad">
<div id="footer">
<p><?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a> | <a href="http://www.blogohblog.com">Bob</a> <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. <?php wp_footer(); ?></p>
</div></div></div>
</body></html>
*/ ?>
		
<footer>
      <div class="row nomargin">
        <div class="col l12 s12 footer">
          <div class="col l2 m2 s6">
            <a href="terminos.php"><p>Términos y condiciones</p></a>
          </div>
          <div class="col l3 m2 s6">
            <a href="aviso.php"><p>Aviso de privacidad</p></a>
          </div>
          <div class="col l2 m2 s6">
            <a href="faq.php"><p>Preguntas frecuentes</p></a>
          </div>
          <!-- <div class="col l2">
            <a href="#"><p>Blog</p></a>
          </div> -->
          <div class="col l3 m2 s6">
            <a href="contacto.php"><p>Contacto</p></a>
          </div>
          <div class="col l2 m4 s12">
            <div class="col 12 m12 s12">
              <div class="col l12 m12 s12 iconos-mapa1">
                <ul class="nomargin">
                <li><a href="https://www.facebook.com/LegalNestMx/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/LegalNestmx" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/legalnestmx/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/company-beta/16257210/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <p class="nomargin"><span>Todos los derechos reservados LegalNest 2017</span></p>
            </div>
          </div>
        </div>
      </div>
      <script id="azscript" type="text/javascript" src="//app.agendize.com/web/tool2.js?id=111946535"></script>
  </footer>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/materialize.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/animsition.min.js" charset="utf-8"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $(".button-collapse").sideNav();
    });
  </script>

</body>
</html>