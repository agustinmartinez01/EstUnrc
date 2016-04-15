<?php


function input_actCulturales($id,$array)
{
    print("<h3> Actividades Culturales</>");
    require '../basededatos/functions.php';
    $table_name="actCulturales";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);$cantcol=count($row);
            $mode1[0] =$row['titulo'];
            $mode1[1] =$row['fecha'];
            $mode1[2] =$row['descripcion'];
            $mode1[3] =$row['img_path'];
          endforeach;
    $mode = array("titulo", "fecha", "descripcion", "img_path");
    print'<form action="/modificacionDB/modificarDB.php" method="post" enctype="multipart/form-data" >';
      for ($i = 0; $i <= 3; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input value='.$mode1[$i].' type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
     print '<label for="imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="actCulturales">';
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';    
    print '</form>';
    
    
}

function input_becas($id,$array)
{
    print("<h3> Becas</>");
    require '../basededatos/functions.php';
    $table_name="becas";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);$cantcol=count($row);
            $mode1[0] =$row['nombre'];
            $mode1[1] =$row['informacion'];
            $mode1[2] =$row['img_path'];
          endforeach;
    $mode = array("nombre", "informacion", "img_path");
    print'<form action="/modificacionDB/modificarDB.php" method="post" enctype="multipart/form-data" >';
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
              print '<input value='.$mode1[$i].' type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<label for="imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="becas">';
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';      
    print '</form>';
    
    
}
function input_actividades($id,$array){
  print("<h3> Charlas Viajes y Congresos</>");
  require '../basededatos/functions.php';
    $table_name="actividades";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);$cantcol=count($row);
            $mode1[0] =$row['titulo'];
            $mode1[1] =$row['fecha'];
            $mode1[2] =$row['descripcion'];
            $mode1[3] =$row['img_path'];
          endforeach;
  $mode = array("titulo", "fecha", "descripcion", "img_path");
  print'<form action="/modificacionDB/modificarDB.php" method="post" enctype="multipart/form-data" >';
      print '<select name="facultad">';
      print '<option>Humanas</option>';
      print '<option>Exactas</option>';
      print '<option>Ingenieria</option>';
      print '<option>Economicas</option>';
      print '<option>AgronomiaVeterinaria</option>';
      print '</select>';
      for ($i = 0; $i <= 2; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input value="'.$mode1[$i].'" type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<label for="imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="actividades">'; 
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';        
    print '</form>';
}

function input_carnets($id,$array){
  print("<h3> Carnets</>");
  require '../basededatos/functions.php';
    $table_name="carnets";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);
            $mode1[0] =$row['descr_que_es'];
            $mode1[1] =$row['descr_como_funciona'];
            $mode1[2] =$row['descr_donde_consigo'];
            $mode1[3] =$row['img_path_que_es'];
            $mode1[4] =$row['img_path_donde_consigo']; 
          endforeach;
  $mode = array("descr_que_es","descr_como_funciona","descr_donde_consigo","img_path_que_es","img_path_donde_consigo");
    print'<form action="/modificacionDB/modificarDB.php" method="post" enctype="multipart/form-data" >';
      for ($i = 0; $i <= 2; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input value="'.$mode1[$i].'" type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<label for="Que es">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<label for="Donde lo Consigo">Imagen:</label>
          <input type="file" name="imagen1" id="imagen1" />';
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="carnets">';
    print '<input type="hidden" name="id" value='.$id.'>'; 
    print '</form>';
  
}
function input_unrcContactos($id,$array){
  print("<h3> Contactos UNRC</>");
  $i=0;
  require '../basededatos/functions.php';
    $table_name="unrcContactos";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);
            $mode1[0] =$row['tipo'];
            $mode1[1] =$row['nombre'];
            $mode1[2] =$row['telefono'];
            $mode1[3] =$row['mail'];
          endforeach;
  $mode = array("tipo","nombre","telefono","mail");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
    for ($i = 0; $i <= 3; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input value="'.$mode1[$i].'" type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor

    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="unrcContactos">';  
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';       
    print '<input type="hidden" name="id" value='.$id.'>';    
    print '</form>';            
           
}

function input_contactateMails($id,$array){
  $i=0;
  require '../basededatos/functions.php';
    $table_name="contactateMails";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);
            $mode1[0] =$row['mail'];
            
          endforeach;
  $mode = array("mail");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
    print '<label><h6 style="color:black">';
    print $mode[$i];
    print '</h6></label>' ;
    print '<p align="left">';
    print '<label for=';
    print $mode[$i];
    print'></label>';
    print '<input value="'.$mode1[$i].'" type="text" name=';
              print ($mode[$i]);print "></p>"; 
    print '<input name="Agregar" type="submit" value="Agregar">';
    print '<input type="hidden" name="table_name" value="contactateMails">';  
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';       
    print '</form>';
}

function input_espacioRedes($id,$array){
  print("<h3> Espacio Independiente</>");
  $i=0;
  require '../basededatos/functions.php';
    $table_name="espacioRedes";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);
            $mode1[0] =$row['titulo'];
            $mode1[1] =$row['descripcion'];
            $mode1[2] =$row['facebookUrl'];
            $mode1[3] =$row['twitterUrl'];
            $mode1[4] =$row['email'];   
          endforeach;
  $mode = array("titulo","descripcion","facebookUrl","twitterUrl","email","img_path");
    print'<form action="/modificacionDB/modificarDB.php" method="post" enctype="multipart/form-data">';
      for ($i = 0; $i <= 4; $i++) {
              print '<label><h6 style="color:black">';
              print $mode[$i];
              print '</h6></label>' ;
              print '<p align="left">';
              print '<label for=';
              print $mode[$i];
              print'></label>';
              print '<input value="'.$mode1[$i].'" type="text" name=';
              print ($mode[$i]);print "></p>"; 
              
            }//endfor
    print '<label for="Imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<input name="Agregar" type="submit" value="Agregar">';   
    print '<input type="hidden" name="table_name" value="espacioRedes">';  
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';    
    print '</form>';
}

function input_localesAdheridos($id,$array){
  print("<h3> Locales Adheridos</>");
  require '../basededatos/functions.php';
    $table_name="localesAdheridos";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);
            $mode1[0] =$row['nombre'];
            $mode1[1] =$row['direccion'];
            $mode1[2] =$row['rubro'];
            $mode1[3] =$row['descuento'];
          endforeach;
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
              print '<input value="'.$mode1[$i].'" type="text" name=';
              print ($mode[$i]);print "></p>";
              
            }//endfor
    print '<input name="Agregar" type="submit" value="Agregar">'; 
    print '<input type="hidden" name="table_name" value="localesAdheridos">';  
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';      
    print '</form>';
}

function input_calendarios($id,$array){
  print("<h3> Calendarios Academicos</>");
  require '../basededatos/functions.php';
    $table_name="calendarios";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);
            $mode1[0] =$row['facultad'];
            $mode1[1]= $row['img_path'];
          endforeach;
  $i=0;
  $mode = array("img_path");
  print'<form action="/modificacionDB/modificarDB.php" method="post" >';
    print '<select name="facultad">';
      print '<option>Humanas</option>';
      print '<option>Exactas</option>';
      print '<option>Ingenieria</option>';
      print '<option>Economicas</option>';
      print '<option>AgronomiaVeterinaria</option>';
      print '</select>';
      print '<label for="Imagen">Imagen:</label>
          <input type="file" name="imagen" id="imagen" />';
    print '<input name="Agregar" type="submit" value="Agregar">';  
    print '<input type="hidden" name="table_name" value="calendarioAcademico">';  
    print '<input type="hidden" name="id" value='.$id.'>';  
    print '<input type="hidden" name="array" value='.$array.'>';     
    print '</form>';    
}

function input_noticias($id,$array){
  print("<h3> Noticias Facebook</>");
  require '../basededatos/functions.php';
    $table_name="fb";
    $shop = functions::getId($table_name,$id);
    foreach ($shop as $row): array_map('htmlentities', $row);
            $mode1[0] =$row['facebook_path'];
          endforeach;
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
    print '<input value="'.$mode1[$i].'" type="text" name=';
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
