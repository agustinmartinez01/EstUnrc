<?php


include_once '../basededatos/Database1.php';
include_once '../basededatos/mysql_login.php';
//include_once '../modificacionDB/db_connect1.php';




function borrar($id,$meta)
    {
        if ($meta=="calendarios"){
			$comando = "DELETE FROM ".$meta." WHERE facultad=?";

	        // Preparar la sentencia
	        $sentencia = Database1::getInstance()->getDb()->prepare($comando);

	        $sentencia->execute(array($id));
	        if($sentencia){
	        	return true;
	        }else{
	        	return false;
	        }

		}else{
			$comando = "DELETE FROM ".$meta." WHERE id=?";

	        // Preparar la sentencia
	        $sentencia = Database1::getInstance()->getDb()->prepare($comando);

	        $sentencia->execute(array($id));
	        if($sentencia){
	        	return true;
	        }else{
	        	return false;
	        }

		}
        
    }

