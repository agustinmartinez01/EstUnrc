<?php
/**
 * 
 * 
 */


    //comprobamos si ha ocurrido un error.
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

    


?>



<?php
if (PHP_OS === 'Windows')
{
    exec("rd /s /q {$path}");
}
else
{
    exec("rm -rf {$path}");
}
?>
