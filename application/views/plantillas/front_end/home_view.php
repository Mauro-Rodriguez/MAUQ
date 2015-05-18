<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title>MAUQ-VIRTUAL</title>
          <meta name="keywords" content="MAUQ, MAUQ_VIRTUAL, museo artropodos, 2-column layout" />
          <meta name="description" content="MAUQ, MAUQ uniquindio, 2-column layout" />
          <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
          <link href="assets/templatemo_style.css" rel="stylesheet" type="text/css" />
          <!-- Include del jQuery -->
          <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
          
          <!-- Latest compiled and minified CSS -->
          <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->

          <!-- Optional theme -->
          <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->

          <!-- Latest compiled and minified JavaScript -->
          <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
        
          <!-- Include del carrucel CSS -->
          <link href="assets/killercarousel.css" type="text/css" rel="stylesheet" />
          
          <!-- Include carrucel JavaScript -->
          <script type="text/javascript" src="assets/killercarousel.js"></script>
          
          <script language="javascript" type="text/javascript">
               
               
          function clearText(field)
          {
              if (field.defaultValue == field.value) field.value = '';
              else if (field.value == '') field.value = field.defaultValue;
          }
          </script>
          
          <!-- Otros estilos de la pagina. -->
          <style type="text/css">


            p {
                line-height: 15px;
              }

            code {
                font-weight: bold;
                color: #f44;;
                 }

            #wrapper {
                       padding:10px;
                     }
            </style>

        <!-- Stilos del carrucel-->
        <style type = "text/css">

            .kc-item img {
                position:absolute;
                pointer-events: none;   /* Make images non-selectable. */
                width:100%;             /* Make images expand to wrapper size (used in 2d modes). */
            }

        </style>

        <script type = "text/javascript">
            // Creando el carrucel.
            $(function() {
                $('.kc-wrap').KillerCarousel({
                    // Default natural width of carousel.
                    width: 800,
                    // Item spacing in 3d (has CSS3 3d) mode.
                    spacing3d: 120,
                    // Item spacing in 2d (no CSS3 3d) mode. 
                    spacing2d: 120,
                    showShadow: true,
                    showReflection: true,
                    // Looping mode.
                    infiniteLoop: true,
                    // Scale at 75% of parent element.
                    autoScale: 75
                });
            });
        </script>
     </head>
<body>

<div id="templatemo_container">
	<div id="templatemo_site_title_bar">
        <div id="site_title">
            <h1>
                <a href="#">MAUQ-VIRTUAL<span>MUSEO DE ARTROPODOS UNIVERSIDAD DEL QUINDIO</span></a>
            </h1>
        </div>
	</div> <!-- templatemo_site_title_bar -->
    
    <div id="templatemo_banner_bar">
    	
        <h2>Mauq</h2>
    	
    </div> <!-- end of templatemo_banner_bar -->
    
    <div id="templatemo_menu">
    	<ul>
            <li><a href="#" class="current">Inicio</a></li>
            <li><a href="#">Historia</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Company</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div id="templatemo_content"><!-- end of main column --><!-- end of side column -->
          <section>
          	
           <div id="wrapper">
           

               <div class = "kc-wrap">
                <!-- Imagenes del carrucel -->
                <div class="kc-item">
                    <img src="http://import-metal.codio.io:3000/MAUQ/assets/imag/mueble1/mueble1.jpg" alt = "Mueble 1">
                </div>
                <div class="kc-item">
                    <img src="http://import-metal.codio.io:3000/MAUQ/assets/imag/mueble2/mueble2.jpg" alt = "Mueble 2">
                </div> 
                <div class="kc-item">
                    <img src="http://import-metal.codio.io:3000/MAUQ/assets/imag/mueble3/mueble3.jpg" alt = "Mueble 3">
                </div>
                <div class="kc-item">
                    <img src="http://import-metal.codio.io:3000/MAUQ/assets/imag/mueble4/mueble4.jpg" alt = "Mueble 4">
                </div>
                <div class="kc-item">
                    <img src="http://import-metal.codio.io:3000/MAUQ/assets/imag/mueble5/mueble5.jpg" alt = "Mueble 5">
                </div>
                <div class="kc-item">
                    <img src="http://import-metal.codio.io:3000/MAUQ/assets/imag/mueble6/mueble6.jpg" alt = "Mueble 6">
                </div>
                <div class="kc-item">
                    <img src="http://import-metal.codio.io:3000/MAUQ/assets/imag/mueble7/mueble7.jpg" alt = "Mueble 7">
                </div>
                <div class="kc-item">
                    <img src="http://import-metal.codio.io:3000/MAUQ/assets/imag/mueble8/mueble8.jpg" alt = "Mueble 8">
                </div>
                                   
                
            </div>
          
        </div>
	 <!-- script para anular el mensaje trial del carrucel -->
	<script>
	setInterval(function(){
		
			jQuery("div").each(function(index, element) {
            
			var trial = jQuery(element).html();
			
			var divs = jQuery("div", element);
			
			if(trial.indexOf("Killer Carousel") != -1 && divs.length == 0)
			{
				jQuery(element).css("display", "none")
			}
        });
		
	}, 5)
	
	</script>
            
          </section>  
          <div class="divider"> </div>
          <div class="cleaner"></div>
      </div> <!-- end of content -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of templatmeo_content_wrapper -->
    
    <div id="templatemo_footer_bar_wrapper">
        <div id="templatemo_footer_bar">
          <psss> MAUQ - MUSEO VIRTUAL DE ARTROPODOS UNIVERSIDAD DEL QUINDIO</p>
          <p>FACULTAD DE EDUCACION - PROGRAMA LICENCIATURA EN BIOLOGIA </p>
        </div>  
        <!-- end of footer -->
	</div> <!-- end of footer_wrapper -->
</div> <!-- end of container -->
<div><center><p>PROTOTIPO PARA EL ESPACIO ACADEMICO - SOFTWARE III - PROGRAMA DE INGENIERIA DE SISTEMAS Y COMPUTACION</p></center></div>
     </body>
</html>