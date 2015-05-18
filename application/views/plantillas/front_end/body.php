<body>

<div id="templatemo_container">
	<div id="templatemo_site_title_bar">
        <div id="site_title">
            <h1>
                <a href="<?php echo base_url()."home" ?>">MAUQ-VIRTUAL<span>MUSEO DE ARTROPODOS UNIVERSIDAD DEL QUINDIO</span></a>
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
               
          <h3><center>MUSEO VIRTUAL DE ARTROPODOS UQ</center></h3>	
               
           <div id="wrapper">
           

               <div class = "kc-wrap">
                <!-- Imagenes del carrucel -->
                <div class="kc-item">
                    <img src="<?php echo base_url().'/assets/imag/mueble1/mueble1.jpg'?>" alt = "Mueble 1">
                </div>
                <div class="kc-item">
                    <img src="<?php echo base_url().'/assets/imag/mueble2/mueble2.jpg'?>" alt = "Mueble 2">
                </div> 
                <div class="kc-item">
                    <img src="<?php echo base_url().'/assets/imag/mueble3/mueble3.jpg'?>" alt = "Mueble 3">
                </div>
                <div class="kc-item">
                    <img src="<?php echo base_url().'/assets/imag/mueble4/mueble4.jpg'?>" alt = "Mueble 4">
                </div>
                <div class="kc-item">
                    <img src="<?php echo base_url().'/assets/imag/mueble5/mueble5.jpg'?>" alt = "Mueble 5">
                </div>
                <div class="kc-item">
                    <img src="<?php echo base_url().'/assets/imag/mueble6/mueble6.jpg'?>" alt = "Mueble 6">
                </div>
                <div class="kc-item">
                    <img src="<?php echo base_url().'/assets/imag/mueble7/mueble7.jpg'?>" alt = "Mueble 7">
                </div>
                <div class="kc-item">
                    <img src="<?php echo base_url().'/assets/imag/mueble8/mueble8.jpg'?>" alt = "Mueble 8">
                </div>
                                   
                
            </div>
          
        </div>
	            
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
</body>
</html>