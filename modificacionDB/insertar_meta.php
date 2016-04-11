<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
require 'obtener_metas.php';

sec_session_start();
?>
  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>
        <link rel="stylesheet" href="styles/main.css" />
        <link href="menucss/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="menucss/css/menu.css" rel="stylesheet" type="text/css" />
                <script type="" src="style/tabla.css"></script> 
    </head>
    <body>
        <?php if (login_check($mysqli) == true) {
          
          
          

          $meta = $_POST['table_name'];
          $cantcol=$_POST['cantcol'];
          
          switch ($meta) {
              case "actCulturales":
                  input_actCulturales();
                  
                  break;
              case "becas":
                  input_becas();
                  
                  break;
              case "actividades":
                  input_actividades();
                  break;
              case "carnets":
                  input_carnets();
                  break;
              case "categorias":
                  input_categorias();
                  break;
              case "contactateMails":
                 input_contactateMails();
                  break;
              case "espacioRedes":
                  input_espacioRedes();
                  break;
              case "localesAdheridos":
                  input_localesAdheridos();
                  break;
              case "calendarioAcademicos":
                  input_calendarioAcademico();
                  break;
              case "noticias":
                  input_noticias();
                  break;
              case "contactateconNosotros":
                 input_contactateconNosotros();
                  break;
              case "mapas":
                  input_mapas();
                  break;
            }
        }else {
            print"<p>
                <span class='error'>You are not authorized to access this page.</span> Please <a href='index.php'>login</a>.
            </p>";
        } ?>
    
    </body>
</html>
  