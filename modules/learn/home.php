<?php
$sHtml = '';
if (isset($_GET['nmr'])){
    $nmr = $_GET['nmr'];
}
else
{
    // DEFAULTNMR
    $nmr = 1;
}

$sHtml = '
<div class="textBlock">
    <h1>Start your journey now!</h1>
    <p>
    By clicking on the button below you\'ll learn all the necessary information to pass the upcoming test!
        <br />
    Once you pass the test you\'ll receive a certificate!
    </p>
</div>

<div class="actionLearn">
    <a href="index.php?module=learn&page=learning&nmr='. $nmr .'"<button class="btnAction">Start learning!</button></a>
</div>


';



return $sHtml;
?>