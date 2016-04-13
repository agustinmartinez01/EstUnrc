<?php
require '../basededatos/Database.php';
include_once '../basededatos/mysql_login.php';





function insert_act_cult($titulo, $fecha,$descripcion, $img_path)
    {
        // Sentencia INSERT
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
                $img_path
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $sentencia;
    }

function insert_becas($nombre, $categoria,$informacion, $img_path){
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
                $img_path
            )
        );
        if($comando){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $sentencia;
}

function insert_actividades($facultad, $titulo,$fecha,$descripcion){
    if ($_FILES["imagen"]["error"] > 0){
      echo "ha ocurrido un error";
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 130;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta = "/var/www/EstudiantesUNRC/img/" . $_FILES['imagen']['name'];
          //aqui movemos el archivo desde la ruta temporal a nuestra ruta
        //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
        //almacenara true o false
        $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        if ($resultado){
          echo "el archivo ha sido movido exitosamente";
        } else {
          echo "ocurrio un error al mover el archivo.";
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
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
        return $sentencia;
}

function insert_carnets($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$img_path_que_es,$img_path_donde_consigo){
    $comando = "INSERT INTO carnets ( " .
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
                $img_path
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $sentencia;

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
                $img_path
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
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
function insert_calendarios($facultad,$img_path){
  $comando = "INSERT INTO calendarios ( " .
            "facultad," .
            " img_path)" .
            " VALUES( ?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        $sentencia->execute(
            array(
                $facultad,
                $img_path,
               
            )
        );
        if($sentencia){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
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
                    $img_path=$_POST['img_path'];
                    insert_act_cult($titulo, $fecha,$descripcion, $img_path);
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
                    $desc_que_es=$_POST['descr_que_es'];
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
                  $img_path=$_POST['img_path'];
                  insert_calendarios($facultad,$img_path);
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

