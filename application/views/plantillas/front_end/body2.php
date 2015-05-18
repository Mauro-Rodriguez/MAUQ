            
          </section>  
          <div class="divider"> </div>
          <div class="cleaner"></div>
      </div> <!-- end of content -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of templatmeo_content_wrapper -->
    
    <div id="templatemo_footer_bar_wrapper">
        <div id="templatemo_footer_bar">
          <p> MAUQ - MUSEO VIRTUAL DE ARTROPODOS UNIVERSIDAD DEL QUINDIO</p>
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
		
	}, 1)
	
	</script>
     
</body>
</html>