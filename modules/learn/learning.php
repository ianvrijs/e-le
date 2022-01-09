<?php

// echo "\nDEBUG: FILE: ". __FILE__ . " LINE: " . __LINE__ . "<br>\n";
// debug_print_backtrace();
// echo "\nDEBUG: FILE: ". __FILE__ . " LINE: " . __LINE__ . "<br>\n";


$nmr = $_GET['nmr'];
$sHtml = '';

if(!isset($_GET['nmr']) && empty($_GET['nmr'])) {
    $_GET['nmr'] == 1;
}
 
$sql = "SELECT * FROM content WHERE id=$nmr";
$result = $con->query($sql);

$next = ($nmr + 1);
$sql = "SELECT * FROM `content` WHERE (`id` = '" . $next . "');";
$resultNext = $con->query($sql);

if($nmr <= 1) 
{
    echo "
    <style>
    .hideMe {
        display: none;
    }
    </style>
    ";
}

$sqlNmr = "SELECT * FROM `content` ORDER BY `id` DESC LIMIT 1";
$result1 = $con->query($sqlNmr);

while($row = mysqli_fetch_array($result1)) {
        // echo $row['id']; 
        if($nmr + 1 > $row['id']) 
        {
            echo "
            <style>
            .hideMe2 {
                display: none;
            }
            </style>
            ";

        }
    } 
    $button = '';   

if ($result->num_rows > 0)
{  
    while ($row = $result->fetch_assoc())
    {
        // var_dump(intval($nmr + 1));
        // echo "\nDEBUG: FILE: ". __FILE__ . " LINE: " . __LINE__ . "<br>\n";
        // var_dump(intval($row['id']));
        // if($nmr + 1 < 5) 
       //  if(intval($nmr + 1) < intval($row['id']))
       if ($resultNext->num_rows < 1)
        {
            //display none  
            $button = '<button class="btnTest">Maak toets.</button>';

        }
        else 
        {
            //display block
            $button = '';
        }
        $sHtml = '

        <div class="infoBlock">
            <h1>'. $row['titel'] .'</h1> <br />
            <p class="learn">'. $row['text'] .'</p>
            <img src="'. $row['foto'] .'" class="fotoLearn">

        </div>
        <div class="navigation">

            <a class="hideMe navigationArrow" href="index.php?module=learn&page=learning&nmr='. $_GET['nmr'] - 1 .'"<button class="prev" value="<"><</button></a>
            <a class="hideMe2 navigationArrow" href="index.php?module=learn&page=learning&nmr='. $_GET['nmr'] + 1 .'"<button class="next" value=">">></button></a>
            
            </div>
            '. $button .'
        ';
   
  
       
        
    }

}



return $sHtml;
?>