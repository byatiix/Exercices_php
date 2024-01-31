<?php
$nomexercice = "Ex0522.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $largeur = $_POST["largeur"];
    $hauteur = $_POST["hauteur"];

    if($largeur>0)
    {
        echo "La surface est de " . $largeur*$hauteur . "</BR>";
        echo "Le périmètre est de " . ($largeur + $hauteur)*2;
    }

    elseif($hauteur>0)
    {
        echo "La surface est de " . $largeur*$hauteur . "</BR>";
        echo "Le périmètre est de " . ($largeur + $hauteur)*2;
    }

    else
    {
        echo "La surface est de " . $largeur*$hauteur . "</BR>"; 
        echo "Le périmètre est de " . ($largeur + $hauteur)*2;
    }
}

else
{
?>
    <form action="Ex0522.php" method="POST">
    <p>Largeur :</p>
    <input type="text" name="largeur" size="3" autofocus>
    <p>Hauteur :</p>
    <input type="text" name="hauteur" size="3" autofocus>
    <input type="submit" name="bValider" value="Valider">
    </form>
<?php
}
include('../footer.html');
?>