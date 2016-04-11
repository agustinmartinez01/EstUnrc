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
            if($tabla=="actCulturales"){
                $titulo=$_POST['titulo'];
                $fecha=$_POST['fecha'];
                $descripcion=$_POST['descripcion'];
                $img_path=$_POST['img_path'];
                insert_act_cult($titulo, $fecha,$descripcion, $img_path);

            }
          

        ?>
    
    </body>
</html>

