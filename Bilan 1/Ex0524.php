<?php
$nomexercice = "Ex0524.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $adulte = $_POST["adulte"];
    $enfant = $_POST["enfant"];
    $total = $adulte + $enfant;
    $prixenfant = 8;
    $prixadulte = 12;
    $prixgroupe = 7.5;
    $totalenfant = $enfant * $prixenfant;
    $totaladulte = $adulte * $prixadulte;

    if($total>=15)
    {
        echo "Le prix à payer est de ". $total * $prixgroupe ." €.</BR>";
        echo "Le calcul:</BR> Le nombre de persone: ". $total ." fois le prix de groupe ". $prixgroupe ." €.";
    }

    else
    {
        echo "Le prix à payer est de ". $totalenfant + $totaladulte ." €.</BR>";
        echo "Le calcul:</BR> Le nombre d'enfants: ". $enfant ." fois le prix: ". $prixenfant ." € et le nombre d'adultes: ". $adulte ." fois le prix: ". $prixadulte ." €.";
    }
}

else
{
?>
    <form action="Ex0524.php" method="POST">
        <p>Nombre d'adultes: </p>
        <input type="number" name="enfant" size="3" autofocus>
        <p>Nombre d'enfants: </p>
        <input type="number" name="adulte" size="3">
        <input type="submit" name="bValider" value="Valider">
    </form>
<?php
}
include('../footer.html');
?>