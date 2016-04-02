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
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
        <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
        	
        
       	   <div class="container">

            <ul id="nav">
                <li><a href="http://www.script-tutorials.com/">Home</a></li>
                <li><a class="hsubs" href="#">Calendario Academico</a></li>
                <li><a class="hsubs" href="#">Becas</a></li>
                <li><a class="hsubs" href="#">Noticias FURC</a></li>
                <li><a href="#">Carnet FURC</a></li>
                <li><a href="#">Informacion Unrc</a></li>
                <li><a href="#">Contactos</a></li>
		<li><a href="#">Espacio Independiente</a></li>
		<li><a href="#">Mapa</a></li>
		<li><a href="#">Eventos</a>
			<ul class="subs">
                        <li><a href="#">Charlas</a></li>
                        <li><a href="#">Viajes</a></li>
                        <li><a href="#">Congresos</a></li>
                    </ul>
		</li>
		<li><a href="#">Agenda Cultural</a></li>
            </ul>
	<h1>Cuerpo del menu</h1>
        </div>
	
    </p>
	<div>
            </p>
            <p><h2>Return to</h2> <a href="index.php"><h2>login page</h2></a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
	</div>
    </body>
</html>
    
    
              
