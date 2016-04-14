<?php
require '../basededatos/Database.php';
include_once '../basededatos/mysql_login.php';





function insert_act_cult($titulo, $fecha,$descripcion){
  if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta="";
          $comando = "INSERT INTO actCulturales ( " .
            "titulo," .
            " fecha," .
            " descripcion," .
            " img_path)" .
            " VALUES( ?,?,?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $titulo,
                $fecha,
                $descripcion,
                $ruta
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta='/var/www/EstudiantesUNRC/imagenes/actculturales/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $comando = "INSERT INTO actCulturales ( " .
            "titulo," .
            " fecha," .
            " descripcion," .
            " img_path)" .
            " VALUES( ?,?,?,?)";
            // Preparar la sentencia
            $sentencia = Database::getInstance()->getDb()->prepare($comando);

            $sentencia->execute(
                array(
                    $titulo,
                    $fecha,
                    $descripcion,
                    $ruta
                )
            );
            if($sentencia){
              print "<h3>Carga Exitosa</h3>";
            }else{
                print "<h3>Carga Fallo</h3>";
            }
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia;
}







function insert_becas($nombre,$categoria,$informacion){
  if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta="";
          $comando = "INSERT INTO becas ( " .
              "nombre," .
              " categoria," .
              " informacion," .
              " img_path)" .
              " VALUES( ?,?,?,?)";
            // Preparar la sentencia
            $sentencia = Database::getInstance()->getDb()->prepare($comando);
            $sentencia->execute(
                array(
                    $nombre,
                    $categoria,
                    $informacion,
                    $ruta
                )
            );
            if($sentencia){
                  print "<h3>Carga Exitosa</h3>";
             }else{
                    print "<h3>Carga Fallo</h3>";
                      }
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta='/var/www/EstudiantesUNRC/imagenes/becas/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $comando = "INSERT INTO becas ( " .
              "nombre," .
              " categoria," .
              " informacion," .
              " img_path)" .
              " VALUES( ?,?,?,?)";
            // Preparar la sentencia
            $sentencia = Database::getInstance()->getDb()->prepare($comando);
            $sentencia->execute(
                array(
                    $nombre,
                    $categoria,
                    $informacion,
                    $ruta
                )
            );
            if($sentencia){
                  print "<h3>Carga Exitosa</h3>";
                  echo "el archivo ha sido movido exitosamente";
             }else{
                    print "<h3>Carga Fallo</h3>";
                      }
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia;
}
  
            
                  
    


function insert_actividades($facultad, $titulo,$fecha,$descripcion){
    if ($_FILES["imagen"]["error"] > 0){
      echo "<h3>No subió Foto</h3>";
      $ruta="";
      $comando = "INSERT INTO actividades ( " .
            "facultad," .
            " titulo," .
            " fecha," .
            " descripcion," .
            " img_path)" .
            " VALUES( ?,?,?,?,?)";
            // Preparar la sentencia
            $sentencia = Database::getInstance()->getDb()->prepare($comando);

            $sentencia->execute(
                array(
                    $facultad,
                    $titulo,
                    $fecha,
                    $descripcion,
                    $ruta
                )
            );
              if($sentencia){
              print "<h3>Carga Exitosa</h3>";
              }else{
                print "<h3>Carga Fallo</h3>";
                  }
        
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        switch ($facultad) {
              case "Humanas":
                  $ruta='/var/www/EstudiantesUNRC/imagenes/actividades/hum/'.$_FILES['imagen']['name'];
                  break;
              case "Exactas":
                  $ruta="/var/www/EstudiantesUNRC/imagenes/actividades/exa/".$_FILES['imagen']['name'];
                  break;
              case "Ingenieria":
                  $ruta="/var/www/EstudiantesUNRC/imagenes/actividades/ing/".$_FILES['imagen']['name'];
                  break;
              case "Economicas":
                  $ruta="/var/www/EstudiantesUNRC/imagenes/actividades/eco/".$_FILES['imagen']['name'];
                  break;
              case "AgronomiaVeterinaria":
                  $ruta="/var/www/EstudiantesUNRC/imagenes/actividades/ayv/".$_FILES['imagen']['name'];
                  break;
        }

          //aqui movemos el archivo desde la ruta temporal a nuestra ruta
        //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
        //almacenara true o false
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
          $comando = "INSERT INTO actividades ( " .
            "facultad," .
            " titulo," .
            " fecha," .
            " descripcion," .
            " img_path)" .
            " VALUES( ?,?,?,?,?)";
            // Preparar la sentencia
            $sentencia = Database::getInstance()->getDb()->prepare($comando);

            $sentencia->execute(
                array(
                    $facultad,
                    $titulo,
                    $fecha,
                    $descripcion,
                    $ruta
                )
            );
              echo "el archivo ha sido movido exitosamente";
              if($sentencia){
              print "<h3>Carga Exitosa</h3>";
              }else{
                print "<h3>Carga Fallo</h3>";
                  }
        } else {
          
        
          echo "ocurrio un error al mover el archivo.";
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia;
}

function insert_carnets($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$img_path_que_es,$img_path_donde_consigo){
  if ($_FILES["imagen"]["error"] > 0) {
      print "<h3>Cargar Imagen 'Que es' Obligatoria</h3>";
    }else{
      if ($_FILES["imagen1"]["error"] > 0){
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta='/var/www/EstudiantesUNRC/imagenes/carnets/'.$_FILES['imagen']['name'];
        $ruta1=null;
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
          $comando = "INSERT INTO carnets ( " .
            "descr_que_es," .
            " descr_como_funciona," .
            " descr_donde_consigo," .
            " img_path_que_es," .
            " img_path_donde_consigo)" .
            " VALUES( ?,?,?,?,?)";
          // Preparar la sentencia
          $sentencia = Database::getInstance()->getDb()->prepare($comando);

          $sentencia->execute(
              array(
                  $descr_que_es,
                  $descr_como_funciona,
                  $descr_donde_consigo,
                  $ruta,
                  $ruta1
              )
          );
          if($sentencia){
            print "<h3>Carga Exitosa</h3>";
          }else{
              print "<h3>Carga Fallo</h3>";
          }
        }else{
          echo "ocurrio un error al mover el archivo que es.";
        }
    }
  }else{
    if ($_FILES["imagen1"]["error"] <= 0){
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if ((in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)&&
        (in_array($_FILES['imagen1']['type'], $permitidos) && $_FILES['imagen1']['size'] <= $limite_kb * 1024)){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta='/var/www/EstudiantesUNRC/imagenes/carnets/'.$_FILES['imagen']['name'];
        $ruta1='/var/www/EstudiantesUNRC/imagenes/carnets/'.$_FILES['imagen1']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        $resultado1 = move_uploaded_file($_FILES["imagen1"]["tmp_name"], $ruta1);
        if (($resultado)&&($resultado1)){
          $comando = "INSERT INTO carnets ( " .
            "descr_que_es," .
            " descr_como_funciona," .
            " descr_donde_consigo," .
            " img_path_que_es," .
            " img_path_donde_consigo)" .
            " VALUES( ?,?,?,?,?)";
          // Preparar la sentencia
          $sentencia = Database::getInstance()->getDb()->prepare($comando);

          $sentencia->execute(
              array(
                  $descr_que_es,
                  $descr_como_funciona,
                  $descr_donde_consigo,
                  $ruta,
                  $ruta1
              )
          );
          if($sentencia){
            print "<h3>Carga Exitosa</h3>";
          }else{
              print "<h3>Carga Fallo</h3>";
          }
        }else{
          echo "ocurrio un error al mover el archivo .";
        }
      }
  }else{
    print "<h3>ocurrio un error al mover los dos archivos</h3>";
  }
  }
    }
  
  

  

}

function insert_categorias($titulo){
    $comando = "INSERT INTO categorias ( " .
            "titulo)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $titulo
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $sentencia;
}

function insert_contactateMails($mail){
  $comando = "INSERT INTO contactateMails ( " .
            "mail)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $mail
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $sentencia;
}

function insert_espacioRedes($titulo,$descripcion,$facebookUrl,$twitterUrl,$email,$img_path){
  if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta="";
          $comando = "INSERT INTO espacioRedes ( " .
            "titulo," .
            " descripcion," .
            " facebookUrl," .
            " twitterUrl," .
            " email," .
            " img_path)" .
            " VALUES( ?,?,?,?,?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $titulo,
                $descripcion,
                $facebookUrl,
                $twitterUrl,
                $email,
                $ruta
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta='/var/www/EstudiantesUNRC/imagenes/espacio/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $comando = "INSERT INTO espacioRedes ( " .
            "titulo," .
            " descripcion," .
            " facebookUrl," .
            " twitterUrl," .
            " email," .
            " img_path)" .
            " VALUES( ?,?,?,?,?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $titulo,
                $descripcion,
                $facebookUrl,
                $twitterUrl,
                $email,
                $ruta
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia;
}







  










function insert_localesAdheridos($nombre,$direccion,$rubro,$descuento){
  $comando = "INSERT INTO localesAdheridos ( " .
            "nombre," .
            " direccion," .
            " rubro," .
            " descuento)" .
            " VALUES( ?,?,?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $nombre,
                $direccion,
                $rubro,
                $descuento
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $sentencia;
}
//!!!!!!!!!!!!!1REVISAR..............
function insert_calendarios($facultad){
  if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta="";
          $comando = "INSERT INTO calendarios ( " .
            "facultad," .
            " img_path)" .
            " VALUES( ?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $facultad,
                $ruta
               
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta='/var/www/EstudiantesUNRC/imagenes/calendarios/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $comando = "INSERT INTO calendarios ( " .
            "facultad," .
            " img_path)" .
            " VALUES( ?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $facultad,
                $ruta
               
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia;
}





 
///!!!!!!!!!!!!!!!!!REVISAR1
function insert_noticias($link_face){
  $comando = "INSERT INTO noticias ( " .
            "link_face)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $link_face
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $sentencia;
}
//ESRA DE MAS!!!!!!!!!!!!!!!!!!!!!!!!!
function insert_fb($facebook_path){
  $comando = "INSERT INTO fb ( " .
            "facebook_path)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $facebook_path
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $sentencia;
}



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
        <?php 
            $tabla = $_POST['table_name'];
            /*if($tabla=="actCulturales"){
                $titulo=$_POST['titulo'];
                $fecha=$_POST['fecha'];
                $descripcion=$_POST['descripcion'];
                $img_path=$_POST['img_path'];
                insert_act_cult($titulo, $fecha,$descripcion, $img_path);

            }*/
            switch ($tabla) {
              case "actCulturales":
                    $titulo=$_POST['titulo'];
                    $fecha=$_POST['fecha'];
                    $descripcion=$_POST['descripcion'];
                    //$img_path=$_POST['img_path'];
                    insert_act_cult($titulo, $fecha,$descripcion);
                  break;
              case "becas":
                    $nombre=$_POST['nombre'];
                    $categoria=$_POST['categoria'];
                    $informacion=$_POST['informacion'];
                    $img_path=$_POST['img_path'];
                    insert_becas($nombre, $categoria,$informacion, $img_path);
                  break;
              case "actividades":
                    $facultad=$_POST['facultad'];
                    $titulo=$_POST['titulo'];
                    $fecha=$_POST['fecha'];
                    $descripcion=$_POST['descripcion'];
                    $img_path=$_POST['img_path'];
                    insert_actividades($facultad, $titulo,$fecha,$descripcion, $img_path);
                  break;
              case "carnets":
                    $descr_que_es=$_POST['descr_que_es'];
                    $descr_como_funciona=$_POST['descr_como_funciona'];
                    $descr_donde_consigo=$_POST['descr_donde_consigo'];
                    $img_path_que_es=$_POST['img_path_que_es'];
                    $img_path_donde_consigo=$_POST['img_path_donde_consigo'];
                    insert_carnets($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$img_path_que_es,$img_path_donde_consigo);
                  break;
              case "categorias":
                  $titulo=$_POST['titulo'];
                  insert_categorias($titulo);
                  break;
              case "contactateMails":
                  $mail=$_POST['mail'];
                  insert_contactateMails($mail);
                  break;
              case "espacioRedes":
                  $titulo=$_POST['titulo'];
                  $descripcion=$_POST['descripcion'];
                  $facebookUrl=$_POST['facebookUrl'];
                  $twitterUrl=$_POST['twitterUrl'];
                  $email=$_POST['email'];
                  $img_path=$_POST['img_path'];
                  insert_espacioRedes($titulo,$descripcion,$facebookUrl,$twitterUrl,$email,$img_path);
                  break;
              case "localesAdheridos":
                  $nombre=$_POST['nombre'];
                  $direccion=$_POST['direccion'];
                  $rubro=$_POST['rubro'];
                  $descuento=$_POST['descuento'];
                  insert_localesAdheridos($nombre,$direccion,$rubro,$descuento);
                  break;
              case "calendarios":
                  $facultad=$_POST['facultad'];
                 //$img_path=$_POST['img_path'];
                  insert_calendarios($facultad);
                  break;
              case "noticias":
                  $link_face=$_POST['link_face'];
                  insert_noticias($link_face);
                  break;
              case "unrcContactos":
                  $tipo=$_POST['tipo'];
                  $nombre=$_POST['nombre'];
                  $telefono=$_POST['telefono'];
                  $mail=$_POST['mail'];
                  insert_unrcContactos($tipo,$nombre,$telefono,$mail);
                  break;
              case "mapas":
                  
                  break;
              case "fb" :
                $facebook_path=$_POST['facebook_path'];
                insert_fb($facebook_path);
                break;
            }
          

        ?>
    
    </body>
</html>

