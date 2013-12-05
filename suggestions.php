<?php error_reporting(0);
	
	$con = mysql_connect('localhost', 'root','');
	$db	 = mysql_select_db('yourdatabase');
	$query 	= mysql_real_escape_string($_REQUEST['term']);
	$sql 	= "select name from `fd_main_category` where name like '%$query%'";
	
	$query 	= mysql_query($sql);
	while($row = mysql_fetch_assoc($query)){
		$val[] = $row['name'];
	}
	echo json_encode($val);

?>