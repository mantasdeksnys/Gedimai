<?php

$errorCode = NULL;

error_reporting ( $errorCode );

$pageId = $_GET["id"];
$formData = $_POST["gedimas"];

if ( empty ( $pageId ) ) {
	
	if ( isset ( $formData["isset"] ) ) {
		
		echo "Pavyko";
		
	} else {
		
		//echo '<head><meta http-equiv="refresh" content="0; url=index.php"></head>';
		
	}
	
}