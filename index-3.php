<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
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
}
</style>
<!-- particles.js container -->
<div id="particles-js"></div>
<!-- div com flex para centralizar div filha ao centro -->
<div class="center-div">
    <!-- texto central -->
    <div class="texto">
        <!-- logo -->
        <div class="logo">
            <a href="#!" title="Legal Nest">
                <img src="images/recursos/legal-nest.png" style="width:400px;margin-bottom: 20px;">
            </a>
        </div>
        <!-- fim logo -->
        <p class="inovacion">
          INOVACIÓN
        </p>
        <a href="quienes-somos.php"><p class="boton-futuro">
          Descubre el futuro de <br>
          los servicios legales
        </p></a>
    </div>
    <!-- fim texto central -->
</div>
<!-- fim div com flex para centralizar div filha ao centro -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/particulas.js"></script>

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
