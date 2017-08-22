<html>

<head>

<title>LegalNest</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<meta name="author" content="VELOSOFT"/>

<meta name="description" content="LegalNest | News rules, new laws, new ways"/>

<meta name="Resource-type" content="Document"/>

<link rel="icon" href="favicon.png" type="image/x-icon"/>

<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/x-icon"/>

<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

</head>

<style>

/* ---- reset ---- */

* {

box-sizing: border-box;

margin: 0;

}



canvas {

display: block;

vertical-align: top;

}



/* ---- particles.js container ---- */

#particles-js {

background: #2e3341;

height: 100vh;

position: absolute;

width: 100%;

}



/* ---- particles.js container ---- */

.center-div {

position: absolute;

display: -webkit-box;

display: -ms-flexbox;

display: flex;

z-index: 10;

height: 100vh;

width: 100%;

-webkit-box-align: center;

    -ms-flex-align: center;

        align-items: center;

-webkit-box-pack: center;

    -ms-flex-pack: center;

        justify-content: center;

}



.texto {

font-family: 'poppins';

font-size: 34px;

font-weight: 100;

color: #fff;

text-align: center;

}

.texto span {

font-weight: 400;

}



.small {

margin-top: 20px;

font-size: 20px;

}



a {

text-decoration: none;

}



.inovacion{

  color: white;

  font-family: 'Montserrat', sans-serif;

  font-size: 2em;

  margin-top: 50px;

}

.boton-futuro{

  border:1px solid #a8a89f;

  border-radius: 50px;

  color: #a8a89f;

  font-family: 'Roboto', sans-serif;

  font-size: .65em;

  font-weight: 500;

  margin-top: 100px;

  padding: 10px 0 !important;

  -webkit-transition: all 300ms cubic-bezier(0.500, 0.250, 0.500, 0.750);

   -moz-transition: all 300ms cubic-bezier(0.500, 0.250, 0.500, 0.750);

     -o-transition: all 300ms cubic-bezier(0.500, 0.250, 0.500, 0.750);

        transition: all 300ms cubic-bezier(0.500, 0.250, 0.500, 0.750); /* custom */



-webkit-transition-timing-function: cubic-bezier(0.500, 0.250, 0.500, 0.750);

   -moz-transition-timing-function: cubic-bezier(0.500, 0.250, 0.500, 0.750);

     -o-transition-timing-function: cubic-bezier(0.500, 0.250, 0.500, 0.750);

        transition-timing-function: cubic-bezier(0.500, 0.250, 0.500, 0.750); /* custom */

}

.boton-futuro:hover{

  background: #a8a89f;

  border:1px solid #2e3341;

  border-radius: 50px;

  color: #2e3341;

  font-family: 'Roboto', sans-serif;

  font-size: .65em;

  font-weight: 500;

  margin-top: 100px;

  padding: 10px 0 !important;

}

.boton-enojon{

  width: 350px;

  margin:0 auto;

}

</style>

<script type="text/javascript">

var device = navigator.userAgent



if (device.match(/Iphone/i)|| device.match(/Ipod/i)||

device.match(/Android/i)|| device.match(/J2ME/i)||

device.match(/BlackBerry/i)|| device.match(/iPhone|iPod/i)||

device.match(/Opera Mini/i)|| device.match(/IEMobile/i)||

device.match(/Mobile/i)|| device.match(/Windows Phone/i)||

device.match(/windows mobile/i)|| device.match(/windows ce/i)||

device.match(/webOS/i)|| device.match(/palm/i)||

device.match(/bada/i)|| device.match(/series60/i)||

device.match(/nokia/i)|| device.match(/symbian/i)||

device.match(/HTC/i))

 {

window.location = "que-es.php";



}

else

{

}

</script>

<!-- particles.js container -->

<div id="particles-js"></div>

<!-- div com flex para centralizar div filha ao centro -->

<div class="center-div">

    <!-- texto central -->

    <div class="texto">

        <!-- logo -->

        <div class="logo">

            <a href="#!" title="Legal Nest">

                <img src="<?php bloginfo('template_url') ?>/images/recursos/legal-nest.png" style="width:400px;margin-bottom: 20px;margin-right: 50px;">

            </a>

        </div>

        <!-- fim logo -->

        <div class="">

        <p class="inovacion">

          <span>INNOVACIÓN</span>

        </p>

        </div>

        <div class="boton-enojon">

        <a href="<?php echo site_url("?page_id=47");?>"><p class="boton-futuro">

          Descubre el futuro de <br>

          los servicios legales

        </p></a>

        </div>

    </div>

    <!-- fim texto central -->

</div>

<!-- fim div com flex para centralizar div filha ao centro -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/particulas.js"></script>



<script>

  var tex =["INNOVACIÓN" , "ATENCIÓN" , "CONFIANZA" , "COMUNICACIÓN" , "TRANSPARENCIA" , "INNOVACIÓN", "ATENCIÓN", "TRANSPARENCIA", "COMUNICACIÓN", "CONFIANZA"];

  var texindex=1;

  setInterval(function(){

    if(texindex>=tex.length){

      texindex=0;

    }

    $(".inovacion span").fadeOut(2000,function(){

      $(".inovacion span").html(tex[texindex]);

      $(".inovacion span").fadeIn(2000);

      texindex++;

    });

  }, 2000);

</script>

<script>







particlesJS("particles-js", {

  "particles": {

      "number": {

          "value": 120,

          "density": {

              "enable": true,

              "value_area": 800

          }

      },

      "color": {

          "value": "#8a8a83"

      },

      "shape": {

          "type": "circle",

          "polygon": {

              "nb_sides": 350

          },

      },

      "size": {

          "value": 2,

          "random": true,

          "anim": {

              "enable": false,

              "speed": 140,

              "size_min": 0.1,

              "sync": false

          }

      },

      "line_linked": {

          "enable": true,

          "distance": 150,

          "color": "#8a8a83",

          "opacity": 0.4,

          "width": 1

      },

      "move": {

          "enable": true,

          "speed": 3,

          "direction": "none",

          "random": false,

          "straight": false,

          "out_mode": "out",

          "bounce": false,

          "attract": {

              "enable": false,

              "rotateX": 1600,

              "rotateY": 5200

          }

      }

  },

  "retina_detect": true

});

</script>

</html>

