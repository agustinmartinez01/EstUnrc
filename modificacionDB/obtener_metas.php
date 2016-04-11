<?php


function input_actCulturales()
{
    $mode = array("titulo", "fecha", "descripcion", "img_path");
    print'<form action="/modificacionDB/insertarDB.php" method="post" >';
      for ($i = 0; $i <= 3; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="actCulturales">';      
    print '</form>';
    
    
}

function input_becas()
{
    $mode = array("nombre", "categorias", "informacion", "img_path");
    print'<form action="/modificacionDB/insertarDB.php" method="post" >';
      for ($i = 0; $i <= 3; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="becas">';      
    print '</form>';
    
    
}
function input_actividades(){
	$mode = array("facultad", "titulo", "fecha", "descripcion", "img_path");
	print'<form action="/modificacionDB/insertarDB.php" method="post" >';
      for ($i = 0; $i <= 4; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="actividades">';         
    print '</form>';
}

function input_carnets(){
	$mode = array("descr_que_es","descr_como_funciona","descr_donde_consigo","img_path_que_es","img_path_donde_consigo");
    print'<form action="/modificacionDB/insertarDB.php" method="post" >';
      for ($i = 0; $i <= 4; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
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
    print '<input type="text" name=';
    print ($mode[$i]);print "></p>";
    print '<input name="Agregar" type="submit" value="Agregar">';    
    print '<input type="hidden" name="table_name" value="categorias">';     
    print '</form>';            
           
}

function input_contactateMails(){
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
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="contactateMails">';         
    print '</form>';
}

function input_espacioRedes(){
	$mode = array("titulo","descripcion","facebookUrl","twitterUrl","email","img_path");
    print'<form action="/modificacionDB/insertarDB.php" method="post" >';
      for ($i = 0; $i <= 5; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<input name="Agregar" type="submit" value="Agregar">';   
    print '<input type="hidden" name="table_name" value="espacioRedes">';      
    print '</form>';
}

function input_localesAdheridos(){
	$mode = array("nombre","dereccion","rubro","descuento");
	print'<form action="/modificacionDB/insertarDB.php" method="post" >';
      for ($i = 0; $i <= 3; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<input name="Agregar" type="submit" value="Agregar">'; 
    print '<input type="hidden" name="table_name" value="localesAdheridos">';        
    print '</form>';
}

function input_calendarioAcademico(){
	$i=0;
	$mode = array("img_path");
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
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="calendarioAcademico">';       
    print '</form>';    
}

function input_noticias(){
	$i=0;
	$mode = array("link_face");
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
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="noticias">';         
    print '</form>'; 
              
            
}

function input_contactateconNosotros(){
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
    print '<input name="Agregar" type="submit" value="Agregar">'; 
    print '<input type="hidden" name="table_name" value="contactateconNosotros">';       
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
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="mapas">';        
    print '</form>';          
              
            
}
