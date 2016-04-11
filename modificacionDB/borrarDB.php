<?php


require '../basededatos/Database.php';
include_once '../basededatos/mysql_login.php';
include_once '../modificacionDB/db_connect1.php';




function borrar($id,$meta)
    {
        // Sentencia INSERT
        // Sentencia DELETE
        $comando = "DELETE FROM ".$meta." WHERE id=?";

        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(array($id));

    }

