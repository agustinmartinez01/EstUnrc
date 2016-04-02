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

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Estudiantes UNRC</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="styles/main.css" />
<link rel="shortcut icon" type="image/x-icon" href="https://yt3.ggpht.com/-kioqQVxubo4/AAAAAAAAAAI/AAAAAAAAAAA/1uLAbd5t6kk/s88-c-k-no/photo.jpg" >	
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
	<style type="text/css"> 
BODY{ 
text-align: center; 
} 
#total{ 
display:table; 
height:100%; 
text-align: left; 
margin: auto; 
} 
#contenido{ 
_position: absolute; 
_top: 50%; 
display: table-cell; 
vertical-align: middle; 
text-align:left; 
width:400px; 
} 
#centrar{ 
_position: relative; 
_top: -50%; 
background-color:e0e0e0; 
border-style:solid; 
border-width:2px; 
border-color:#999999; 
} 
</style>  
    </head>
    <body background="fondov.jpg" text="#FFFFFF">
	<div id="total"> 
    <div id="contenido"> 
       <div id=centrar>
	<center>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="includes/process_login.php" method="post" name="login_form"> 
		<p align="center">
			<label><h3 style="color:black"> Email</h3></label>			
			<label for="email"></label>
            		<input type="text" name="email" />
		</p>
		<p align="center">
			<label><h3 style="color:black"> Contraseña</h3></label>			
			<label for="Contraseña"></label>
            		<input type="password" 
                             name="password" 
                             id="password"/>
		</p>
		<p align="center">
		    <input type="button" 
		           value="Login" 
		           onclick="formhash(this.form, this.form.password);" />
		</p> 
        </form>
	</center>
		</div> 
    </div> 
</div>
        
        <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
        <p>You are currently logged <?php echo $logged ?>.</p>
    </body>
</html>
