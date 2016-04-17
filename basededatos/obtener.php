<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
include_once 'functionsDB.php';

//include_once '../includes/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
        <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
              
              <?php
			$table_name = $_GET['tabla'];
			$version = $_GET['version'];
			$dato=null;
			print strtoupper($table_name);
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					$cantcol=0;
			    // Manejar petición GET
			if ($table_name=="mapas"){
				print 'En CONSTRUCCION'; 
			}else{
			   $regs = functionsDB::getAll($table_name,$version);
							
			    

			    if ($regs) {

			        $datos=$regs;
							$shop = $datos;
							$shop1=$regs;
							if (count($shop) > 0){
								print '<style type="text/css"> table {  color: #333; font-family: Helvetica, Arial, sans-serif; width: 640px; border-collapse: collapse;}
								th {
								    background-color: #4CAF50;
								    color: white;
								}
								td, th { border: 1px solid transparent; height: 30px; }

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
								    <td><input type='radio' id='id' name='id' value=";
								    if (isset($row['facultad'])){
								    	$value=$row['facultad'];
								    }else{
								    	$value=$row['id'];
								    }
								  print $value;
								  print ">"; print implode('</td><td>', $row );print"</td>
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
			 ?>







            </p>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="../index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>





