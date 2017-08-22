<?php 
/*
template name: contacto
*/
  get_header();
 ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 
       
      var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields   
    $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
      $(this).css('border-color',''); 
      if(!$.trim($(this).val())){ //if this field is empty 
        $(this).css('border-color','red'); //change border color to red   
        proceed = false; //set do not proceed flag
      }
      //check invalid email
      var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
      if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
        $(this).css('border-color','red'); //change border color to red   
        proceed = false; //set do not proceed flag        
      } 
    });
       
        if(proceed) //everything looks good! proceed...
        {
      //get input field values data to be sent to server
            post_data = {
        'user_name'   : $('input[name=name]').val(), 
        'user_email'  : $('input[name=email]').val(), 
       // 'country_code'  : $('input[name=phone1]').val(), 
       // 'phone_number'  : $('input[name=phone2]').val(), 
       // 'subject'   : $('select[name=subject]').val(), 
        'msg'     : $('textarea[name=message]').val()
      };
            
            //Ajax post data to server
            $.post('contact_me.php', post_data, function(response){  
        if(response.type == 'error'){ //load json data from server and output message     
          output = '<div class="error">'+response.text+'</div>';
        }else{
            output = '<div class="success">'+response.text+'</div>';
          //reset values in all input fields
          $("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
          $("#contact_form #contact_body").slideUp(); //hide form after success
        }
        $("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json');
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});
</script>

<div class="animsition"
  data-animsition-in-class="fade-in-up-sm"
  data-animsition-in-duration="1000"
  data-animsition-out-class="fade-out-up-sm">

  <div class="row nomargin">
    <div class="valign-wrapper">
      <div class="col l12 s12 nomargin valign">
        <div class="col l6 m6 offset-m3 s12 center imagen-somos img-contacto">
          <img src="<?php bloginfo('template_url'); ?>/images/recursos/contacto.png" title="Quiénes Somos" alt="Legal Nest">
        </div>
        <div class="col l6 m10 offset-m1 s12 top-100">
        <div class="form-style" id="contact_form">

        <div id="contact_results"></div>
        <div id="contact_body">
          <div class="row nomargin">
            <div class="input-field col s12">
              <input type="text" name="name" id="name" required="true" class="input-field"/>
              <label for="first_name">NOMBRE</label>
            </div>
          </div>
          <div class="row nomargin">
            <div class="input-field col s12">
              <input type="email" name="email" required="true" class="input-field"/>
              <label for="email">EMAIL</label>
            </div>
          </div>
          <div class="row nomargin">
            <div class="col s12 input-field" style="background-color:#fbfbfa;">
              <textarea name="message" id="message" class="materialize-textarea bg-mensaje nomargin required="true"></textarea>
              <label for="textarea1">MENSAJE</label>
            </div>
          </div>
          <a class="btn-floating btn-large right boton-enviar" ><input type="image" src="<?php bloginfo('template_url'); ?>/images/recursos/avion-contacto.png" id="submit_btn" value="Submit" style="margin-top: 9%;"></a>
          </div>
        </div>
        <div class="col l12 m12 s12 iconos-mapa">
          <ul>
            <li><a href="mailto:contacto@legalnest.mx"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
         <!--    <li><a target="_blank" jstcache="46" href="https://www.google.com.mx/maps/place/Calle+Montes+Urales+424,+Lomas+-+Virreyes,+Lomas+de+Chapultepec+V+Secc,+11000+Ciudad+de+M%C3%A9xico,+CDMX/@19.428953,-99.2082064,17.72z/data=!4m5!3m4!1s0x85d201f5e4d05993:0x12d97fc83226487e!8m2!3d19.4292171!4d-99.2067805" jsaction="mouseup:placeCard.largerMap"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li> -->
            <li><a href="" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
            <li><a href="https://www.facebook.com/LegalNestMx/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/LegalNestmx" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/legalnestmx/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/company-beta/16257210/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        </div>
        <div class="col l12 m12 s12 nomargin top-50" style="position:relative;">
          <div class="texto-mapa">
            <p>
              Calle Montes Urales 424, Lomas - Virreyes, Lomas de Chapultepec V Secc, 11000 Ciudad de México, CDMX
            </p>
            <p style="text-align:left !important; color:#33b498 !important; font-weight:bold !important;">
              Tel: (55) 7590-1768
            </p>
            <p>
              <a target="_blank" jstcache="46" href="https://www.google.com.mx/maps/place/Calle+Montes+Urales+424,+Lomas+-+Virreyes,+Lomas+de+Chapultepec+V+Secc,+11000+Ciudad+de+M%C3%A9xico,+CDMX/@19.428953,-99.2082064,17.72z/data=!4m5!3m4!1s0x85d201f5e4d05993:0x12d97fc83226487e!8m2!3d19.4292171!4d-99.2067805" jsaction="mouseup:placeCard.largerMap">Abrir Mapa Completo</a>
            </p>
          </div>
          <div class="mapa" id="mack-map"></div>
        </div>
      </div>
    </div>
  </div>



<?php
  get_footer();
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNTSMEOij97Zpc3vSSkP1pXOIWg8tH-gA&sensor=false"></script>
<script src="<?php bloginfo('template_url'); ?>/js/maps.js"></script>

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
