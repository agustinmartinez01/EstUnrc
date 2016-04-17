<?php
	include_once 'borrarDB.php';
	include_once 'obtener_metasUpgrade.php';
	//include_once '../includes/functions.php';
	     if (isset($_POST['Eliminar'])) {
	          $id=$_POST['id'];
	          $tabla=$_POST['table_name'];
	          if (borrar($id,$tabla)){
	          		print '<h2>Borrado Exitoso</h2>';
	          		print ''.$tabla.'';
	          		print ''.$id.'';
	          }else{
	          		print 'Borrado Fallo';
	          };

	     } 
	     if (isset($_POST['Modificar'])) {
	          $id=$_POST['id'];
	          $tabla=$_POST['table_name'];
	          $array=$_POST['array'];
          		switch ($tabla) {
		              case "actCulturales":
		                  input_actCulturales($id,$array);
		                  
		                  break;
		              case "becas":
		                  input_becas($id,$array);
		                  
		                  
		                  break;
		              case "actividades":
		                  input_actividades($id,$array);
		                  
		                  break;
		              case "carnets":
		                  input_carnets($id,$array);
		                  
		                  break;
		              case "unrcContactos":
		                  input_unrcContactos($id,$array);
		                  
		                  break;
		              case "contactateMails":
		                 input_contactateMails($id,$array);
		                  
		                  break;
		              case "espacioRedes":
		                  input_espacioRedes($id,$array);
		                  
		                  break;
		              case "localesAdheridos":
		                  input_localesAdheridos($id,$array);
		                  
		                  break;
		              case "calendarios":
		                  input_calendarios($id,$array);
		                  
		                  break;
		              case "fb":
		                  input_noticias($id,$array);
		                  
		                  break;
		              case "contactateconNosotros":
		                 input_contactateconNosotros($id,$array);
		                  
		                  break;
		              case "mapas":
		                  input_mapas($id,$array);
		                  
		                  break;
            	}
	     }
	
?>
