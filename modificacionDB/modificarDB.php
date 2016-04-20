<?php
require '../basededatos/Database1.php';
include_once '../basededatos/mysql_login.php';
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';


sec_session_start();




function modif_act_cult($titulo, $fecha,$descripcion, $img_path,$id,$array)
    {
      if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta="";
          $consulta = "UPDATE actCulturales" .
            " SET titulo=?, fecha=?, descripcion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($titulo, $fecha,$descripcion, $img_path, $id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta='../imagenes/actculturales/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $consulta = "UPDATE actCulturales" .
            " SET titulo=?, fecha=?, descripcion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($titulo, $fecha,$descripcion, $ruta, $id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia;
}



function modif_unrcContactos($tipo,$nombre,$telefono,$mail,$id){
  $consulta = "UPDATE unrcContactos" .
            " SET tipo=?, nombre=?, telefono=?, mail=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($tipo,$nombre,$telefono,$mail,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_becas($nombre, $categoria,$informacion, $img_path,$id,$array){
  if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta="";
          $consulta = "UPDATE becas" .
            " SET nombre=?, categoria=?, informacion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($nombre, $categoria,$informacion, $img_path,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta='../imagenes/becas/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $consulta = "UPDATE becas" .
            " SET nombre=?, categoria=?, informacion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($nombre, $categoria,$informacion, $ruta,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia; 
}

function modif_actividades($facultad, $titulo,$fecha,$descripcion, $img_path,$id,$array){
  if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta="";
          $consulta = "UPDATE actividades" .
            " SET facultad=?, titulo=?, fecha=?, descripcion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($facultad, $titulo,$fecha,$descripcion, $img_path,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta='../imagenes/actividades/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $consulta = "UPDATE actividades" .
            " SET facultad=?, titulo=?, fecha=?, descripcion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($facultad, $titulo,$fecha,$descripcion, $ruta,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
        
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia; 

}

function modif_carnets($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$img_path_que_es,$img_path_donde_consigo,$id,$array){
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
        $ruta='../imagenes/carnets/'.$_FILES['imagen']['name'];
        $ruta1=null;
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado) {
          
            $consulta = "UPDATE carnets" .
                " SET descr_que_es=?, descr_como_funciona=?, descr_donde_consigo=?, img_path_que_es=?, img_path_donde_consigo=? " .
                "WHERE id=?";

            // Preparar la sentencia
            $cmd = Database1::getInstance()->getDb()->prepare($consulta);

            // Relacionar y ejecutar la sentencia
            $cmd->execute(array($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$ruta,$img_path_donde_consigo,$id));
            if($cmd){
              print "<h3>Carga Exitosa</h3>";
            }else{
                print "<h3>Carga Fallo</h3>";
            }
           }else{
                 echo "ocurrio un error al mover el archivo que es.";
                }
       }else{
         echo "Tamaño incorrecto del archivo";
       }
    }else{
    if ($_FILES["imagen1"]["error"] > 0){
      print "<h3>ocurrio un error al mover los dos archivos</h3>";
      }else{
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limite_kb = 130;

        if ((in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)&&
          (in_array($_FILES['imagen1']['type'], $permitidos) && $_FILES['imagen1']['size'] <= $limite_kb * 1024)){
          //esta es la ruta donde copiaremos la imagen
          //recuerden que deben crear un directorio con este mismo nombre
          //en el mismo lugar donde se encuentra el archivo subir.php
          $ruta='../imagenes/carnets/'.$_FILES['imagen']['name'];
          $ruta1='../imagenes/carnets/'.$_FILES['imagen1']['name'];
          $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
          $resultado1 = move_uploaded_file($_FILES["imagen1"]["tmp_name"], $ruta1);
          if (($resultado)&&($resultado1)){
            $consulta = "UPDATE carnets" .
              " SET descr_que_es=?, descr_como_funciona=?, descr_donde_consigo=?, img_path_que_es=?, img_path_donde_consigo=? " .
              "WHERE id=?";

          // Preparar la sentencia
          $cmd = Database1::getInstance()->getDb()->prepare($consulta);

          // Relacionar y ejecutar la sentencia
          $cmd->execute(array($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$ruta,$ruta1,$id));
          if($cmd){
            print "<h3>Carga Exitosa</h3>";
          }else{
              print "<h3>Carga Fallo</h3>";
          }
          }else{
            echo "ocurrio un error al mover el archivo .";
          }
        }
      }
    }
  }
}

function modif_categorias($titulo,$id,$array){
    $consulta = "UPDATE categorias" .
            " SET titulo=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($titulo,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_contactateMails($mail,$id,$array){
  $consulta = "UPDATE contactateMails" .
            " SET mail=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($mail,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_espacioRedes($titulo,$descripcion,$facebookUrl,$twitterUrl,$email,$img_path,$id,$array){
  if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta=$img_path;
          $$consulta = "UPDATE espacioRedes" .
            " SET titulo=?, descripcion=?, facebookUrl=?, twitterUrl=?, email=? ,img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($titulo,$descripcion,$facebookUrl,$twitterUrl,$email,$ruta,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta='../imagenes/espacio/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $consulta = "UPDATE espacioRedes" .
            " SET titulo=?, descripcion=?, facebookUrl=?, twitterUrl=?, email=? ,img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($titulo,$descripcion,$facebookUrl,$twitterUrl,$email,$ruta,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
        
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia;   
}

function modif_localesAdheridos($nombre,$direccion,$rubro,$descuento,$id,$array){
  $consulta = "UPDATE localesAdheridos" .
            " SET nombre=?, direccion=?, rubro=?, descuento=?" .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($nombre,$direccion,$rubro,$descuento,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_calendarios($facultad,$img_path,$id,$array){
  if ($_FILES["imagen"]["error"] > 0){
      echo "No subio Foto!";
      $ruta="";
          $consulta = "UPDATE calendarios" .
            " SET facultad=?, img_path=?" .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($facultad,$img_path,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
        return $cmd;
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        $ruta='../imagenes/calendarios/'.$_FILES['imagen']['name'];
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
            $consulta = "UPDATE calendarios" .
            " SET facultad=?, img_path=?" .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($facultad,$ruta,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
        return $cmd;
        
        } else {
          echo "ocurrio un error al mover el archivo .";
          
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
    
        
        return $sentencia;   

}

function modif_noticias($link_face,$id,$array){
  $consulta = "UPDATE noticias" .
            " SET link_face=?" .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($link_face,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_contactateconNosotros($mail,$id,$array){
  $consulta = "UPDATE contactateconNosotros" .
            " SET mail=?" .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database1::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($mail,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar</title>
        <link rel="stylesheet" href="styles/main.css" />
        <link rel="stylesheet" href="styles/main.css" />
        <link href="menucss/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="menucss/css/menu.css" rel="stylesheet" type="text/css" />
                <script type="" src="style/tabla.css"></script> 
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
              
                  <p>
                      <?php 
                  $tabla = $_POST['table_name'];
                  $id=$_POST['id'];
                  $array=$_POST['array'];
                  switch ($tabla) {
                    case "actCulturales":
                          $titulo=$_POST['titulo'];
                          $fecha=$_POST['fecha'];
                          $descripcion=$_POST['descripcion'];
                          $img_path=$_POST['img_path'];
                          modif_act_cult($titulo, $fecha,$descripcion, $img_path,$id,$array);
                        break;
                  

                    case "becas":
                          $nombre=$_POST['nombre'];
                          $categoria=$_POST['categoria'];
                          $informacion=$_POST['informacion'];
                          $img_path=$_POST['img_path'];
                          modif_becas($nombre, $categoria,$informacion, $img_path,$id,$array);
                        break;
                    case "unrcContactos":
                        $tipo=$_POST['tipo'];
                        $nombre=$_POST['nombre'];
                        $telefono=$_POST['telefono'];
                        $mail=$_POST['mail'];
                        modif_unrcContactos($tipo,$nombre,$telefono,$mail,$id);
                        break;
                    case "actividades":
                          $facultad=$_POST['facultad'];
                          $titulo=$_POST['titulo'];
                          $fecha=$_POST['fecha'];
                          $descripcion=$_POST['descripcion'];
                          $img_path=$_POST['img_path'];
                          modif_actividades($facultad, $titulo,$fecha,$descripcion, $img_path,$id,$array);
                        break;
                    case "carnets":
                          $descr_que_es=$_POST['descr_que_es'];
                          $descr_como_funciona=$_POST['descr_como_funciona'];
                          $descr_donde_consigo=$_POST['descr_donde_consigo'];
                          $img_path_que_es=$_POST['img_path_que_es'];
                          $img_path_donde_consigo=$_POST['img_path_donde_consigo'];
                          modif_carnets($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$img_path_que_es,$img_path_donde_consigo,$id,$array);
                        break;
                    case "categorias":
                        $titulo=$_POST['titulo'];
                        modif_categorias($titulo,$id,$array);
                        break;
                    case "contactateMails":
                        $mail=$_POST['mail'];
                        modif_contactateMails($mail,$id,$array);
                        break;
                    case "espacioRedes":
                        $titulo=$_POST['titulo'];
                        $descripcion=$_POST['descripcion'];
                        $facebookUrl=$_POST['facebookUrl'];
                        $twitterUrl=$_POST['twitterUrl'];
                        $email=$_POST['email'];
                        $img_path=$_POST['img_path'];
                        modif_espacioRedes($titulo,$descripcion,$facebookUrl,$twitterUrl,$email,$img_path,$id,$array);
                        break;
                    case "localesAdheridos":
                        $nombre=$_POST['nombre'];
                        $direccion=$_POST['direccion'];
                        $rubro=$_POST['rubro'];
                        $descuento=$_POST['descuento'];
                        modif_localesAdheridos($nombre,$direccion,$rubro,$descuento,$id,$array);
                        break;
                    case "calendarios":
                        array("img_path");
                        $img_path=$_POST['img_path'];
                        $facultad=$_POST['facultad'];
                        modif_calendarios($facultad,$img_path,$id,$array);
                        break;
                    case "noticias":
                        $link_face=$_POST['link_face'];
                        modif_noticias($link_face,$id,$array);
                        break;
                    case "contactateconNosotros":
                        $mail=$_POST['mail'];
                        modif_contactateconNosotros($mail,$id,$array);
                        break;
                    case "mapas":
                        
                        break;
                  }
                

              ?>
                  </p>
                  <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>
