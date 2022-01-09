<?php 
define('ROOT_URL', 'http://localhost/stoeke/e-learning');
define('ROOT_PATH', __DIR__);

include('db.php');


if (isset($_GET['module']) && !empty($_GET['module']))
{
    $sFilepath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $_GET['module'] . DIRECTORY_SEPARATOR;
}
else
{
    header('Location: index.php?module=homepage');
}



$sHtmlBody = include($sFilepath . "index.php");
$sHtml = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>e-learning</title>
    </head>
    <!-- NAV -->
    <ul>
    <li><a href="index.php?module=homepage">Home</a></li>
    <li><a href="index.php?module=learn">Start learning</a></li>
    <li><a href="index.php?module=test">Take test</a></li>
    <li><a href="index.php?module=homepage#contact">Contact</a></li>
    <li style="float: right; margin-right: 50px;"><a href="index.php?module=homepage">Logo</a></li>
    </ul>

    
    <!-- sHTML TAG -->
            '. $sHtmlBody .'
<div class="footer">
    <p>made with <b class="grn">&#x2764;</b> in '. date("Y") . ' </p>
</div>
';

echo $sHtml;