<?php
$nomexercice = "Ex0525.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $message = $_POST["infos"];
    echo $message;
    ?>
    <form action="Ex0525.php">
        <p></p>
        <input type="submit" name="bRetour" value="Retour">
    </form>
    <?php
}

else
{
?>
    <form action="Ex0525.php" method="POST">
    <p>Introduisez le texte à afficher:</p></BR>
    <input type="text" name="infos" size="20" autofocus>
    <input type="submit" name="bValider" value="Valider">
    </form>
    </BR><p>Vous n'avez pas envoyé votre formulaire</p>
<?php
}
include('../footer.html');
?>