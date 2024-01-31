<?php
$nomexercice ="Ex0508.php";
include('../entete.php');

$x = rand(1, 10000);

echo $x ."</BR>";

if($x%2)
{
    echo "C'est un chiffre impair.";
}

else
{
    echo "C'est un chiffre pair.";
}

include('../footer.html');
?>