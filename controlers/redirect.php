<?php
	$redirect = "backoffice";

	//if(isset($_GET['redirect']) && $_GET['redirect'] =="published" && isset($_GET['id'])) {$redirect="published"; }
	
	header('Location: ./index.php?page='.$redirect.'&msg='.$msg.''	);	

?>