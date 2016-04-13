<?php

/**
 * Representa el la estructura de las metas
 * almacenadas en la base de datos
 */
require 'Database.php';
include_once 'mysql_login.php';
class functions
{
    function __construct()
    {
    }

    /**
     * Retorna en la fila especificada de la tabla 'becas'
     *
     * @param $idMeta Identificador del registro
     * @return array Datos del registro
     */
    public static function getAll($table_name,$table_version)
    {
        
        
        $consulta = "SELECT * FROM $table_name;";
      
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }

        
    }

		
    

    public static function getVersion($table_name)
    {
        
            $consulta = "SELECT tbl.version FROM versiones tbl where tbl.nombre_tabla= '$table_name'";

        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }

        
    }
 

}

?>
