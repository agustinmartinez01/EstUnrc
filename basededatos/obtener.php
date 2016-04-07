<?php
/**
 * Obtiene todas las metas de la base de datos
 */

require 'functions.php';
//require 'selectAllJSON.php';
$table_name = $_GET['tabla'];
$version = $_GET['version'];
$dato;
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		$cantcol=0;
    // Manejar petición GET
    if(is_null($version)){
        $regs = functions::getVersion($table_name); 
				  
    }else{
        $regs = functions::getAll($table_name,$version);
				
    }

    if ($regs) {

        $datos=$regs;

        //print json_encode($datos);
	$shop = $datos;
	$shop1=$regs;
	if (count($shop) > 0){

	

	print "<table>
  			<thead>
    			<tr>
      			<th>";print implode('</th><th>', array_keys(current($shop)));print"</th>
    			</tr>
			  </thead>
			  <tbody>
			"; foreach ($shop as $row): array_map('htmlentities', $row);$cantcol=count($row);
			    print "<tr>
			      <td>"; print implode('</td><td>', $row);print"</td>
			    </tr>";
			endforeach;
			  print"</tbody>
			</table>"
			;
	}	


	

	//$aux = $shop1;
	$mode = current($shop1);
	$mode = array_keys($mode);
	print '<form action="includes/process_login.php" method="post" name="login_form">';
	for ($i = 0; $i <= $cantcol-1; $i++) {
		print '<label><h6 style="color:black">';
		print $mode[$i];
		print '</h6></label>' ;
		print '<p align="left">';
		print '<label for=';
		print $mode[$i];
		print'></label>';
		print '<input type="text" name=';
		print ($mode[$i]);print "></p>";
		if($i==0){ 
		print '<p align="left">
		    <input type="button" 
		           value="Eliminar"" />
		</p> '; 
		print '<p align="left">
		    <input type="button" 
		           value="Modificar"" />
		</p> ';}
				   
    		//echo "<input type='text' name=''>";
		}
		print '<p align="center">
		    <input type="button" 
		           value="Agregar"" />
		</p> ';
			

		
		print "</p> 
        </form>";	 	



    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Error o resultado vacio"
        ));
    }
}
