<?php
require '../basededatos/Database.php';
include_once '../basededatos/mysql_login.php';
include_once '../modificacionDB/db_connect1.php';




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

        return $sentencia->execute(
            array(
                $titulo,
                $fecha,
                $descripcion,
                $img_path
            )
        );

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

        return $sentencia->execute(
            array(
                $nombre,
                $categoria,
                $informacion,
                $img_path
            )
        );
}

function insert_actividades($facultad, $titulo,$fecha,$descripcion, $img_path){
    $comando = "INSERT INTO actividades ( " .
            "facultad," .
            " titulo," .
            " fecha," .
            " descripcion," .
            " img_path)" .
            " VALUES( ?,?,?,?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(
            array(
                $facultad,
                $titulo,
                $fecha,
                $descripcion,
                $img_path
            )
        );
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

        return $sentencia->execute(
            array(
                $facultad,
                $titulo,
                $fecha,
                $descripcion,
                $img_path
            )
        );

}

function insert_categorias($titulo){
    $comando = "INSERT INTO categorias ( " .
            "titulo)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(
            array(
                $titulo
            )
        );
}

function insert_contactateMails($mail){
  $comando = "INSERT INTO contactateMails ( " .
            "mail)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(
            array(
                $mail
            )
        );
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

        return $sentencia->execute(
            array(
                $titulo,
                $descripcion,
                $facebookUrl,
                $twitterUrl,
                $email,
                $img_path
            )
        );

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

        return $sentencia->execute(
            array(
                $nombre,
                $direccion,
                $rubro,
                $descuento
            )
        );
}

function insert_calendarioAcademico($img_path){
  $comando = "INSERT INTO calendarioAcademicos ( " .
            "img_path)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(
            array(
                $img_path
            )
        );
}

function insert_noticias($link_face){
  $comando = "INSERT INTO noticias ( " .
            "link_face)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(
            array(
                $link_face
            )
        );
}

function insert_contactateconNosotros($mail){
  $comando = "INSERT INTO contactateconNosotros ( " .
            "mail)" .
            "  VALUES(?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(
            array(
                $mail
            )
        );
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
              case "calendarioAcademicos":
                  array("img_path");
                  $img_path=$_POST['img_path'];
                  insert_calendarioAcademico($img_path);
                  break;
              case "noticias":
                  $link_face=$_POST['link_face'];
                  insert_noticias($link_face);
                  break;
              case "contactateconNosotros":
                  $mail=$_POST['mail'];
                  insert_contactateconNosotros($mail);
                  break;
              case "mapas":
                  
                  break;
            }
          

        ?>
    
    </body>
</html>

