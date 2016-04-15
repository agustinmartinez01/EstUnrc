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
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';


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
        <?php if (login_check($mysqli) == true) : ?>
				<h1 align="center">Menu de Modificaciones EstudianteUNRC</h1>
        <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
        <p>
        	<p><h2>Return to</h2> <a href="index.php"><h2>login page</h2></a></p>
        
       	   <div class="container">

            <ul id="nav">
                <li><a href="/protected_page.php?campo=Home">Home</a></li>
                <li><a class="hsubs" href="protected_page.php?campo=becas">Becas   </a></li>
                <li><a href="protected_page.php?campo=carnets">Carnet FURC</a></li>
                <li><a href="protected_page.php?campo=localesAdheridos">Locales Adheridos</a></li>
                <li><a href="protected_page.php?campo=unrcContactos">Contactos UNRC</a></li>
                <li><a href="protected_page.php?campo=espacioRedes">Espacio Independiente</a></li>
                <li><a href="protected_page.php?campo=contactateMails">Banco de Ideas</a></li>
                <li><a class="hsubs" href="protected_page.php?campo=actividades">Charlas Viajes y Congresos</a></li>
                <li><a href="protected_page.php?campo=">Más    </a>
                  <ul class="subs">
                        <li><a class="hsubs" href="protected_page.php?campo=actCulturales">ActividadesCulturales</a></li>
                        <li><a class="hsubs" href="protected_page.php?campo=calendarios">Calendario Academico</a></li>
                        <li><a class="hsubs" href="protected_page.php?campo=fb">Noticias</a></li>
                        <li><a class="hsubs" href="protected_page.php?campo=mapas">Mapa UNRC</a></li>
                    </ul>
                </li>

               <div id="lavalamp"></div>
		       
            	<div>
                    <?php $v1 = $_GET['campo']; 
                    if ($v1!="Home"){
								echo "<iframe src='basededatos/obtener.php?tabla={$v1}&version=0'name='xxxx' width='100%' height='3000' scrolling='Auto' frameborder='0' id='xxxx'>";
								}else{
                                echo "<iframe src='https://lh3.googleusercontent.com/-kioqQVxubo4/AAAAAAAAAAI/AAAAAAAAABs/8NpDR_yuXd8/photo.jpg' marginwidth='100' name='xxxx' width='100%' height='600' scrolling='Auto' frameborder='0' id='xxxx'>";
                }?>
							</div>
	    

	
        </div>
	
    </p>
	<div>
	
           
            
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
	</div>
    </body>
</html>
    
    
              
