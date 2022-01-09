<?php
$sHtml = '';

	if (isset($_GET['page'])){
		$sPage = $_GET['page'];
	}
	else
	{
		// DEFAULTPAGE
		$sPage = 'home';
	}
	

	if (!empty($sPage)) {
		$sFilePath = __DIR__ . DIRECTORY_SEPARATOR . $sPage . '.php';

		if(file_exists($sFilePath)) {
			$sHtml = include($sFilePath);
		}
		else{
			header('Location: index.php?module=404');
		}
	}



	return $sHtml;
?>