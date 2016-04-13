<?php


function input_actCulturales($id,$array)
{
    $mode = array("titulo", "fecha", "descripcion", "img_path");
    print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';    
    print '</form>';
    
    
}

function input_becas($id,$array)
{
    $mode = array("nombre", "categoria", "informacion", "img_path");
    print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';      
    print '</form>';
    
    
}
function input_actividades($id,$array){
  $mode = array("facultad", "titulo", "fecha", "descripcion", "img_path");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';        
    print '</form>';
}

function input_carnets($id,$array){
  $mode = array("descr_que_es","descr_como_funciona","descr_donde_consigo","img_path_que_es","img_path_donde_consigo");
    print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';        
    print '</form>';
}
function input_categorias($id,$array){
  $i=0;
  $mode = array("titulo");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';     
    print '</form>';            
           
}

function input_contactateMails($id,$array){
  $i=0;
  $mode = array("mail");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';       
    print '</form>';
}

function input_espacioRedes($id,$array){
  $mode = array("titulo","descripcion","facebookUrl","twitterUrl","email","img_path");
    print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';    
    print '</form>';
}

function input_localesAdheridos($id,$array){
  $mode = array("nombre","direccion","rubro","descuento");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';      
    print '</form>';
}

function input_calendarioAcademico($id,$array){
  $i=0;
  $mode = array("img_path");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';     
    print '</form>';    
}

function input_noticias($id,$array){
  $i=0;
  $mode = array("link_face");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';      
    print '</form>'; 
              
            
}

function input_contactateconNosotros($id,$array){
  $i=0;
  $mode = array("mail");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';      
    print '</form>';
            
}

function input_mapas($id,$array){
  $i=0;
  $mode = array("??????");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
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
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';    
    print '</form>';          
              
            
}
