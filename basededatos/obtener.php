<?php
/**
 * Obtiene todas las metas de la base de datos
 */

require 'functions.php';

include_once '../includes/functions.php';



sec_session_start();

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
					</table>";
					$mode = current($shop1);
					$mode = array_keys($mode);
					print'<form action="/modificacionDB/insertar_meta.php" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input type="hidden" name="cantcol" value="'.$cantcol.'">';
					print '<input name="Agregar" type="submit" value="Agregar">';
					print '</form>';
					print'<form action="/modificacionDB/borrar_meta.php?table_name='.$table_name.'" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input name="Eliminar" type="submit" value="Eliminar">';
					print '<label for="id"> ID : </label>';
					print '<input type="text" name="id" value="" maxlength="4" size="4"">';
					print '</form>';
					print'<form action="/modificacionDB/actualizar_metas.php" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input name="Modificar" type="submit" value="Modificar">';
					print '<label for="id"> ID : </label>';
					print '<input type="text" name="id" value="" maxlength="4" size="4"">';
					print '</form>';	 	
			} else {
						print'<form action="/modificacionDB/insertar_meta.php" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input type="hidden" name="cantcol" value="'.$cantcol.'">';
					print '<input name="Agregar" type="submit" value="Agregar">';
					print '</form>';
					print'<form action="/modificacionDB/borrar_meta.php?table_name='.$table_name.'" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input name="Eliminar" type="submit" value="Eliminar">';
					print '</form>';
					print'<form action="/modificacionDB/actualizar_metas.php" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input name="Modificar" type="submit" value="Modificar">';
					print '</form>';
				}//end else
		}else{
					print'<form action="/modificacionDB/insertar_meta.php" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input type="hidden" name="cantcol" value="'.$cantcol.'">';
					print '<input name="Agregar" type="submit" value="Agregar">';
					print '</form>';
					print'<form action="/modificacionDB/borrar_meta.php?table_name='.$table_name.'" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input name="Eliminar" type="submit" value="Eliminar">';
					print '</form>';
					print'<form action="/modificacionDB/actualizar_metas.php" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input name="Modificar" type="submit" value="Modificar">';
					print '</form>';
				}//end else

}
