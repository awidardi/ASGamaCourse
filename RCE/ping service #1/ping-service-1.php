<?php

if( isset( $_POST['Submit'] )) {
	
	$target = $_REQUEST['ip'];
	
	// Windows
	if( stristr( php_uname('s'), 'Windows NT') ){
		$cmd = shell_exec( 'ping ' . $target);
	}
	else{
		$cmd = shell_exec( 'ping -c 4 ' . $target);
	}
	
	echo "<pre> {$cmd} </pre>";
}

?>