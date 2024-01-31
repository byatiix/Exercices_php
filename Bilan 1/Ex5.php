<?php
$nomexercice ="Ex5.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $achats = $_POST["achats"];

    ?>
    <form action="Ex5.php" method="POST">
        <h1>Calculateur de remise</h1>
        <label>Montant total des achats:</label>
        <input type="number" name="achats" required>
        <input type="submit" name="bValider" value="Calculer">
    </form>
    <?php

    ?>
    <h1>Récapitulatif</h1>
    <?php


    switch($achats){
        case($achats>=50 && $achats<=100):
            $remise = round($achats / 100 * 5, 2);
            break;
        case($achats>100):
            $remise = round($achats / 100 * 10, 2);
            break;
        default:
        $remise = 0;
    }

    echo "Montant total des achats: ". $achats ." €</BR>";
    echo "Remise appliquée: ". $remise ." €</BR>";
    echo "Montant final à payer: ". $achats - $remise ." €";
}

else
{
?>
    <form action="Ex5.php" method="POST">
        <h1>Calculateur de remise</h1>
        <label>Montant total des achats:</label>
        <input type="number" name="achats" required>
        <input type="submit" name="bValider" value="Calculer">
    </form>
<?php
}
include('../footer.html');
?>