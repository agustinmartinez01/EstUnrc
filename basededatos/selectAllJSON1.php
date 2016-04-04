<?PHP

$hostname_localhost ="localhost";
$database_localhost ="DB_EstudiantesUNRC";
$username_localhost ="root";
$password_localhost ="100991";
$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);
 
mysql_select_db($database_localhost, $localhost);
$query_search = "select * from becas";
$query_exec = mysql_query($query_search) or die(mysql_error());
$json = array();        
        if(mysql_num_rows($query_exec)){
                while($row=mysql_fetch_assoc($query_exec)){
                $json['personas'][]=$row;
                }
        }
	mysql_close($localhost);
        echo json_encode($json);
?>

