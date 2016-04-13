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
include_once 'obtener_metasUpgrade.php';
include_once '../basededatos/db_connect.php';

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
          $id=$_POST['id'];
          $array=$_POST['array'];
          switch ($meta) {
              case "actCulturales":
                  input_actCulturales($id,$array);
                  
                  break;
              case "becas":
                  input_becas($id,$array);
                  
                  
                  break;
              case "actividades":
                  input_actividades($id,$array);
                  
                  break;
              case "carnets":
                  input_carnets($id,$array);
                  
                  break;
              case "categorias":
                  input_categorias($id,$array);
                  
                  break;
              case "contactateMails":
                 input_contactateMails($id,$array);
                  
                  break;
              case "espacioRedes":
                  input_espacioRedes($id,$array);
                  
                  break;
              case "localesAdheridos":
                  input_localesAdheridos($id,$array);
                  
                  break;
              case "calendarioAcademicos":
                  input_calendarioAcademico($id,$array);
                  
                  break;
              case "noticias":
                  input_noticias($id,$array);
                  
                  break;
              case "contactateconNosotros":
                 input_contactateconNosotros($id,$array);
                  
                  break;
              case "mapas":
                  input_mapas($id,$array);
                  
                  break;
            }
        }else {
            print"<p>
                <span class='error'>You are not authorized to access this page.</span> Please <a href='index.php'>login</a>.
            </p>";
        } ?>
    
    </body>
</html>
  