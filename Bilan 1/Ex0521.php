<?php
$nomexercice = "Ex0521.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $dispo = $_POST["dispo"];
    $prix = $_POST["litre"];
    
    if($dispo<0)
    {
        echo "Vous n'avez pas de montant disponible.";
    }

    else
    {
        echo "Avec ". $dispo ." €, on peut acheter " . $dispo/$prix ." litres à ". $prix ." € litres.";
    }
    

}

else
{
?>
<form action="Ex0521.php" method="POST">
<p>Montant disponible (€):</p>
<input type="text" name="dispo" size="2" autofocus>
<p>Prix du carburant au litre :</p>
<input type="text" name="litre" size="2" autofocus>
<input type="submit" name="bValider" value="Valider">
</form>

<?php
}
include('../footer.html');
?>
