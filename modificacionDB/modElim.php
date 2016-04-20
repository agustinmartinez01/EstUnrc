<?php
	include_once 'borrarDB.php';
	include_once 'obtener_metasUpgrade.php';
	//include_once '../includes/functions.php';
	     if (isset($_POST['Eliminar'])) {
	          $id=$_POST['id'];
	          $tabla=$_POST['table_name'];
	          if ($table_name=="calendarios"){
	          	$id=$_POST['facultad'];
	          }
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
	          $img_path=$_POST['img_path'];
          		switch ($tabla) {
		              case "actCulturales":
		                  input_actCulturales($id,$array,$img_path);
		                  
		                  break;
		              case "becas":
		                  input_becas($id,$array,$img_path);
		                  
		                  
		                  break;
		              case "actividades":
		                  input_actividades($id,$array,$img_path);
		                  
		                  break;
		              case "carnets":
		                  input_carnets($id,$array,$img_path);
		                  
		                  break;
		              case "unrcContactos":
		                  input_unrcContactos($id,$array,$img_path);
		                  
		                  break;
		              case "contactateMails":
		                 input_contactateMails($id,$array,$img_path);
		                  
		                  break;
		              case "espacioRedes":
		                  input_espacioRedes($id,$img_path);
		                  
		                  break;
		              case "localesAdheridos":
		                  input_localesAdheridos($id,$array,$img_path);
		                  
		                  break;
		              case "calendarios":
		              	$id=$_POST['facultad'];
		                  input_calendarios($id,$img_path);
		                  
		                  break;
		              case "fb":
		                  input_noticias($id,$array,$img_path);
		                  
		                  break;
		              case "contactateconNosotros":
		                 input_contactateconNosotros($id,$array,$img_path);
		                  
		                  break;
		              case "mapas":
		                  input_mapas($id,$array,$img_path);
		                  
		                  break;
            	}
	     }
	
?>
