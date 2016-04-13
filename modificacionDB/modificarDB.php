<?php
require '../basededatos/Database.php';
include_once '../basededatos/mysql_login.php';
include_once '../modificacionDB/db_connect1.php';




function modif_act_cult($titulo, $fecha,$descripcion, $img_path,$id,$array)
    {
        $consulta = "UPDATE actCulturales" .
            " SET titulo=?, fecha=?, descripcion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($titulo, $fecha,$descripcion, $img_path, $id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;

    }

function imput_unrcContactos(){

}

function modif_becas($nombre, $categoria,$informacion, $img_path,$id,$array){
    $consulta = "UPDATE becas" .
            " SET nombre=?, categoria=?, informacion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($nombre, $categoria,$informacion, $img_path,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_actividades($facultad, $titulo,$fecha,$descripcion, $img_path,$id,$array){
    $consulta = "UPDATE actividades" .
            " SET facultad=?, titulo=?, fecha=?, descripcion=?, img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($facultad, $titulo,$fecha,$descripcion, $img_path,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_carnets($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$img_path_que_es,$img_path_donde_consigo,$id,$array){
    $consulta = "UPDATE carnets" .
            " SET descr_que_es=?, descr_como_funciona=?, descr_donde_consigo=?, img_path_que_es=?, img_path_donde_consigo=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($descr_que_es,$descr_como_funciona,$descr_donde_consigo,$img_path_que_es,$img_path_donde_consigo,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;

}

function modif_categorias($titulo,$id,$array){
    $consulta = "UPDATE categorias" .
            " SET titulo=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

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
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

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
  $consulta = "UPDATE espacioRedes" .
            " SET titulo=?, descripcion=?, facebookUrl=?, twitterUrl=?, email=? ,img_path=? " .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($titulo,$descripcion,$facebookUrl,$twitterUrl,$email,$img_path,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;

}

function modif_localesAdheridos($nombre,$direccion,$rubro,$descuento,$id,$array){
  $consulta = "UPDATE localesAdheridos" .
            " SET nombre=?, direccion=?, rubro=?, descuento=?" .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($nombre,$direccion,$rubro,$descuento,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_calendarioAcademico($img_path,$id,$array){
  $consulta = "UPDATE calendarioAcademicos" .
            " SET img_path=?" .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($img_path,$id));
        if($cmd){
          print "<h3>Carga Exitosa</h3>";
        }else{
            print "<h3>Carga Fallo</h3>";
        }
        return $cmd;
}

function modif_noticias($link_face,$id,$array){
  $consulta = "UPDATE noticias" .
            " SET link_face=?" .
            "WHERE id=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

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
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

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
        <title>Menu</title>
        <link rel="stylesheet" href="styles/main.css" />
        <link href="menucss/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="menucss/css/menu.css" rel="stylesheet" type="text/css" />
                <script type="" src="style/tabla.css"></script> 
    </head>
    <body>
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
              case "calendarioAcademicos":
                  array("img_path");
                  $img_path=$_POST['img_path'];
                  modif_calendarioAcademico($img_path,$id,$array);
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
    
    </body>
</html>

