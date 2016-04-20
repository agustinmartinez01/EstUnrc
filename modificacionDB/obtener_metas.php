<?php


function input_actCulturales()
{
    print("<h3> Actividades Culturalles</>");
    $mode = array("titulo", "fecha", "descripcion");
    print'<form action="/modificacionDB/insertarDB.php" method="post" enctype="multipart/form-data" >';
      for ($i = 0; $i <= 2; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
              
              
            }//endfor
            print '<p></p>'; 
    print '<label for="imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="actCulturales">';      
    print '</form>';
    
    
}
function imput_unrcContactos(){
  print("<h3>Contactos UNRC</>");
  $mode = array("tipo", "nombre", "telefono", "mail");
    print'<form action="/modificacionDB/insertarDB.php" method="post" >';
      for ($i = 0; $i <= 3; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
              
            }//endfor
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="unrcContactos">';      
    print '</form>';
}

function input_becas()
{
    print("<h3> Becas</>");
    $mode = array("nombre", "informacion");
    print'<form action="/modificacionDB/insertarDB.php" method="post" enctype="multipart/form-data">';
    print '<select name="categoria">';
      print '<option>Provinciales</option>';
      print '<option>Unrc</option>';
      print '<option>Nacionales</option>';
      print '</select>';
      for ($i = 0; $i <= 1; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
              
            }//endfor
    print '<p></p>'; 
    print '<label for="imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="becas">';      
    print '</form>';
    
    
}
function input_actividades(){
  print("<h3> Charlas Viajes y Congresos</>");
	$mode = array("facultad", "titulo", "fecha", "descripcion");
	print'<form action="/modificacionDB/insertarDB.php" method="post" enctype="multipart/form-data" >';
      print '<select name="facultad">';
      print '<option>Humanas</option>';
      print '<option>Exactas</option>';
      print '<option>Ingenieria</option>';
      print '<option>Economicas</option>';
      print '<option>AgronomiaVeterinaria</option>';
      print '</select>';
      for ($i = 1; $i <= 3; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
              
            }//endfor
            print '<p></p>'; 
    print '<label for="imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="actividades">';         
    print '</form>';
}

function input_carnets(){
  print("<h3> Carnets</>");
	$mode = array("descr_que_es","descr_como_funciona","descr_donde_consigo");
    print'<form action="/modificacionDB/insertarDB.php" method="post" enctype="multipart/form-data" >';
      for ($i = 0; $i <= 2; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
              
            }//endfor
            print '<p></p>'; 
    print '<label for="Que es">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<label for="Donde lo Consigo">Imagen:</label>
          <input type="file" name="imagen1" id="imagen1" />';
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="carnets">';         
    print '</form>';
}
function input_categorias(){
	$i=0;
	$mode = array("titulo");
	print'<form action="/modificacionDB/insertarDB.php" method="post" >';
    print '<label><h6 style="color:black">';
    print $mode[$i];
    print '</h6></label>' ;
    print '<p align="left">';
    print '<label for=';
    print $mode[$i];
    print'></label>';
    print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
              print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';    
    print '<input type="hidden" name="table_name" value="categorias">';     
    print '</form>';            
           
}

function input_contactateMails(){
  print("<h3> Banco de Ideas</>");
	$i=0;
	$mode = array("mail");
	print'<form action="/modificacionDB/insertarDB.php" method="post" >';
    print '<label><h6 style="color:black">';
    print $mode[$i];
    print '</h6></label>' ;
    print '<p align="left">';
    print '<label for=';
    print $mode[$i];
    print'></label>';
    print '<input type="text" name=';
    print ($mode[$i]);print "></p>"; 
    print '<p></p>';  
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="contactateMails">';         
    print '</form>';
}

function input_espacioRedes(){
  print("<h3> Espacio Independiente</>");
	$mode = array("titulo","descripcion","facebookUrl","twitterUrl","email","img_path");
    print'<form action="/modificacionDB/insertarDB.php" method="post" enctype="multipart/form-data">';
      for ($i = 0; $i <= 4; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
              
            }//endfor
            print '<p></p>'; 
    print '<label for="Imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';   
    print '<input type="hidden" name="table_name" value="espacioRedes">';      
    print '</form>';
}

function input_localesAdheridos(){
  print("<h3> Locales Adheridos</>");
	$mode = array("nombre","direccion","rubro","descuento");
	print'<form action="/modificacionDB/insertarDB.php" method="post" >';
      for ($i = 0; $i <= 3; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
              
            }//endfor
            print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">'; 
    print '<input type="hidden" name="table_name" value="localesAdheridos">';        
    print '</form>';
}

function input_calendarios(){
	$i=0;
	$mode = array("facultad","img_path");
  print("<h3> Calendario Academicos</>");
	print'<form action="/modificacionDB/insertarDB.php" method="post" enctype="multipart/form-data">';
  print '<select name="facultad">';
      print '<option>Humanas</option>';
      print '<option>Exactas</option>';
      print '<option>Ingenieria</option>';
      print '<option>Economicas</option>';
      print '<option>AgronomiaVeterinaria</option>';
      print '</select>';
     print '<label for="Imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
     print '<p></p>'; 
     print '<input name="Agregar" type="submit" value="Agregar">';  
     print '<input type="hidden" name="table_name" value="calendarios">';       
     print '</form>';    
}

function input_noticias(){
	$i=0;
  print("<h3> Noticias Facebook</>");
	$mode = array("link_face");
	print'<form action="/modificacionDB/insertarDB.php" method="post" ';
    print '<label><h6 style="color:black">';
    print $mode[$i];
    print '</h6></label>' ;
    print '<p align="left">';
    print '<label for=';
    print $mode[$i];
    print'></label>';
    print '<input type="text" name=';
    print ($mode[$i]);print "></p>";
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="noticias">';         
    print '</form>'; 
              
            
}


function input_mapas(){
	$i=0;
	$mode = array("??????");
	print'<form action="/modificacionDB/insertarDB.php" method="post" >';
    print '<label><h6 style="color:black">';
    print $mode[$i];
    print '</h6></label>' ;
    print '<p align="left">';
    print '<label for=';
    print $mode[$i];
    print'></label>';
    print '<input type="text" name=';
    print ($mode[$i]);print "></p>";
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="mapas">';        
    print '</form>';          
              
            
}
function input_fb(){
  $i=0;
  $mode = array("facebook_path");
  print'<form action="/modificacionDB/insertarDB.php" method="post" >';
    print '<label><h6 style="color:black">';
    print $mode[$i];
    print '</h6></label>' ;
    print '<p align="left">';
    print '<label for=';
    print $mode[$i];
    print'></label>';
    print '<textarea name='.$mode[$i].' rows="8" cols="70">';
              print $mode1[$i];
              print '</textarea>'; 
    print '<p></p>'; 
    print '<input name="Agregar" type="submit" value="Agregar">'; 
    print '<input type="hidden" name="table_name" value="fb">';       
    print '</form>';
}
