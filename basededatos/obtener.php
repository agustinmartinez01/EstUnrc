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
	if (count($shop) > 0){ 
	print "<table>
  			<thead>
    			<tr>
      			<th>";print implode('</th><th>', array_keys(current($shop)));print"</th>
    			</tr>
			  </thead>
			  <tbody>
			"; foreach ($shop as $row): array_map('htmlentities', $row);
			    print "<tr>
			      <td>"; print implode('</td><td>', $row);print"</td>
			    </tr>";
			endforeach;
			  print"</tbody>
			</table>";
	}		 	



    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Error o resultado vacio"
        ));
    }
}
