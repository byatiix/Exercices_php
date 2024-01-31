<?php
$nomexercice ="Ex0509.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $quantite = $_POST["quant"];
    $pu = $_POST["pu"];
    $tva = $_POST["tva"];
    $remise = 0.05;
    $calcul = ($quantite*$pu)*$remise;
   
    if($quantite>0)
    {
        echo "Le prix à payer est de " . round(($quantite*$pu)*(1 + $tva) * (1 - $remise), 2) . " €</BR>";
        echo "Vous avez eu une remise de ". $calcul ." €.";
    }

    else
    {
        echo "Le prix à payer est de ". round($quantite*$pu*$tva, 2) ." €.";
    }

}

else
{
?>
<form action="Ex0509.php" method="POST">
<p>Quantité: </p>
<input type="text" name="quant" size="3" autofocus>
<p>Prix unitaire: </p>
<input type="text" name="pu" size="3" autofocus>
<p>TVA: </p>
<input type="text" name="tva" size="3" autofocus>
<input type="submit" name="bValider" value="Valider">
</form>

<?php
}
include('../footer.html');
?>