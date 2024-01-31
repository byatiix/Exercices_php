<?php
$nomexercice = "Ex2.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
//id d'exemple= Guillaume
//mot de passe d'exemple = 12345678

    $id = $_POST["id"];
    $mdp = $_POST["mdp"];


    if($id == "Guillaume" && $mdp == "12345678" )
    {
        echo "Bonjour <B>Guillaume</B>";
    }

    else{
        echo "Les identifiants ne sont pas corrects.";
        ?>
        <form action="Ex2.php" method="POST">
            <input type="submit" name="reessayer" value="Réessayer">
        </form>
        <?php
    }


}

else
{
?>
    <form action="Ex2.php" method="POST">
        <h1>La connexion</h1>
        <label>Identifiant:</label>
        <input type="text" name="id" size="15" autofocus required>
        <label>Mot de passe:</label>
        <input type="password" placeholder="min. 8 caractères" minlength="8" required name="mdp" size="12">
        <input type="submit" name="bValider" value="Connexion">
    </form>

<?php
}
include('../footer.html');
?>