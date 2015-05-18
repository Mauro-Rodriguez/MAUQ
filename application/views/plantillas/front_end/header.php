<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title>MAUQ-VIRTUAL</title>
          <meta name="keywords" content="MAUQ, MAUQ_VIRTUAL, museo artropodos, 2-column layout" />
          <meta name="description" content="MAUQ, MAUQ uniquindio, 2-column layout" />
          <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
          <link href="<?php echo base_url().'/assets/templatemo_style.css'?>" rel="stylesheet" type="text/css" />
          <!-- Include del jQuery -->
          <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
          
          <!-- Latest compiled and minified CSS -->
          <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->

          <!-- Optional theme -->
          <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->

          <!-- Latest compiled and minified JavaScript -->
          <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
        
          <!-- Include del carrucel CSS -->
          <link href="<?php echo base_url().'/assets/killercarousel.css'?>" type="text/css" rel="stylesheet" />
          
          <!-- Include carrucel JavaScript -->
          <script type="text/javascript" src="<?php echo base_url().'/assets/killercarousel.js'?>"></script>
          
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

                a {
               
                color:#3d8dde;
                
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
