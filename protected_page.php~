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
                <li><a href="/protected_page.php?campo=">Home</a></li>
                <li><a class="hsubs" href="/protected_page.php?campo=actCulturales">ActividadesCulturales</a></li>
                <li><a class="hsubs" href="/protected_page.php?campo=becas">Becas</a></li>
                <li><a class="hsubs" href="/protected_page.php?campo=actividades">AvtividadesXFacultad</a></li>
                <li><a href="/protected_page.php?campo=carnets">CarnetFURC</a></li>
                <li><a href="/protected_page.php?campo=categorias">Categorias</a></li>
                <li><a href="/protected_page.php?campo=contactateMails">Mails</a></li>
								<li><a href="/protected_page.php?campo=espacioRedes">EspacioIndep..Redes</a></li>
								<li><a href="/protected_page.php?campo=locales">LocalesAdheridos</a></li>
								<li><a href="#">Eventos</a>
								<ul class="subs">
		                <li><a href="/protected_page.php?campo=Charalas">Charlas</a></li>
		                <li><a href="/protected_page.php?campo=viajes">Viajes</a></li>
		                <li><a href="/protected_page.php?campo=congresos">Congresos</a></li>
                 </ul>
								<li><a href="/protected_page.php?campo=Agendacultural">Agenda Cultural</a></li>
							<div id="lavalamp"></div>
            	<h1><?php $v1 = $_GET['campo']; 
								if($v1=="becas"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=becas&version=0"name="xxxx" width="100%" height="1500" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="actCulturales"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=actCulturales&version=0"name="xxxx" width="100%" height="1500" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="contactos"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=unrcContactos&version=0"name="xxxx" width="100%" height="1500" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="actividades"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=actividades&version=0"name="xxxx" width="100%" height="1500" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="carnets"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=carnets&version=0"name="xxxx" width="100%" height="1500" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="categorias"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=categorias&version=0"name="xxxx" width="100%" height="1500" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="contactateMails"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=contactateMails&version=0"name="xxxx" width="100%" height="1500" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="espacioRedes"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=espacioRedes&version=0"name="xxxx" width="100%" height="150" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="mapa"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=mapa&version=0"name="xxxx" width="100%" height="1500" scrolling="Auto" frameborder="0" id="xxxx">';
								};
								if($v1=="locales"){
									echo '<iframe src="http://127.0.0.1/basededatos/obtener.php?tabla=localesAdheridos&version=0"name="xxxx" width="100%" height="300" scrolling="Auto" frameborder="0" id="xxxx">';
								};
							 ?>
							</h1>
	    

	
        </div>
	
    </p>
	<div>
           
            <p><h2>Return to</h2> <a href="index.php"><h2>login page</h2></a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
	</div>
    </body>
</html>
    
    
              
