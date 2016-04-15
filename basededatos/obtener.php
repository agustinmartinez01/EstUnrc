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
$dato=null;
print $table_name;
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		$cantcol=0;
    // Manejar petición GET
if ($table_name=="mapas"){
	print 'En CONSTRUCCION'; 
}else{
   $regs = functions::getAll($table_name,$version);
				
    

    if ($regs) {

        $datos=$regs;
				$shop = $datos;
				$shop1=$regs;
				if (count($shop) > 0){
					print '<style type="text/css"> table {  color: #333; font-family: Helvetica, Arial, sans-serif; width: 640px; border-collapse: collapse;}
td, th { border: 1px solid transparent; height: 30px; }
th { background: #D3D3D3; font-weight: bold; }
td { background: #FAFAFA; text-align: center; }
tr:nth-child(even) td { background: #F1F1F1; }  
tr:nth-child(odd) td { background: #FEFEFE; } 
tr td:hover { background: #666; color: #FFF; } </style>';
					print'<form action="/modificacionDB/modElim.php" method="post" >';
					print "<table>
					<thead>
		  			<tr>
		    			<th>";print implode('</th><th>', array_keys(current($shop)));print"</th>
		  			</tr>
					</thead>
					<tbody>
					";
					
					 foreach ($shop as $row): array_map('htmlentities', $row);$cantcol=count($row);
					  print "<tr>
					    <td><input type='radio' id='id' name='id' value=".$row['id'].">"; print implode('</td><td>', $row );print"</td>
					  </tr>";
					endforeach;
					print"</tbody>
					</table>";
					
					
					//print'<form action="/modificacionDB/borrar_meta.php?table_name='.$table_name.'" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					//print '<input type="text" name="id" value="" maxlength="4" size="4"">';
					
					print '<input name="Eliminar" type="submit" class="Eliminar id="Eliminar" value="Eliminar">';
					//print '</form>';print '<input type="text" name="id" value="" maxlength="4" size="4"">';
					//print'<form action="/modificacionDB/actualizar_meta.php" method="post" >';
					//print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input type="hidden" name="array" id="array" value="'.$regs.'">';
					//print '<input type="text" name="id" value="" maxlength="4" size="4"">';
					print '<input name="Modificar" type="submit" value="Modificar">';
					print '</form>';
					print'<form action="/modificacionDB/insertar_meta.php" method="post" >';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input type="hidden" name="cantcol" value="'.$cantcol.'">';
					print '<input name="Agregar" type="submit" value="Agregar">';
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
					print '<label for="id"> ID : </label>';
					print '<input type="text" name="id" value="" maxlength="14" size="14"">';
					print '</form>';
					print'<form action="/modificacionDB/actualizar_meta.php" method="post" >';
					print '<input type="hidden" name="array" value="'.$datos.'">';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input name="Modificar" type="submit" value="Modificar">';
					print '<label for="id"> ID : </label>';
					print '<input type="text" name="id" value="" maxlength="4" size="4"">';
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
					print '<label for="id"> ID : </label>';
					print '<input type="text" name="id" value="" maxlength="14" size="14"">';
					print '</form>';
					print'<form action="/modificacionDB/actualizar_meta.php" method="post" >';
					print '<input type="hidden" name="array" value="'.$datos.'">';
					print '<input type="hidden" name="table_name" value="'.$table_name.'">';
					print '<input name="Modificar" type="submit" value="Modificar">';
					print '<label for="id"> ID : </label>';
					print '<input type="text" name="id" value="" maxlength="4" size="4"">';
					print '</form>';
				}//end else
}
}
