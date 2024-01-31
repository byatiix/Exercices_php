<?php
$nomexercice ="Ex4.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $capitale = $_POST["capitale"];
    $couleur = $_POST["couleur"];
    $age = $_POST["age"];
    $point = 0;

    switch($capitale){
        case($capitale == "Paris"):
            $point++;
            break;
    }
    switch($couleur){
        case($couleur == "Bleu"):
            $point++;
            break;
    }
    switch($age){
        case($age =="18"):
            $point++;
            break;
    }

    if($point == 3){
        echo "Votre score est de 3 sur 3 questions.</BR>";
        echo "Félicitations! Vous avez répondu correctement à toutes les questions.";
    }

    else{
        echo "Votre score est de ". $point ." sur 3 questions.</BR>";
        echo "Vous pouvez améliorer votre score. Révisez et essayer à nouveau.";
        ?>
        <form action="Ex4.php">
    </BR>
            <input type="submit" name="bValider" value="Recommencer">
        </form>
        <?php
    }

}

else{
    ?>

    <form action="Ex4.php" method="POST">
        <p>Question 1: Quelle est la capitale de la France?</p>
            <input type="radio" name="capitale" value="Paris">Paris</BR>
            <input type="radio" name="capitale" value="Londres">Londres</BR>
            <input type="radio" name="capitale" value="Berlin">Berlin

</BR>

        <p>Question 2: Quelle est la couleur du ciel par temps clair?</p>
        
            <input type="radio" name="couleur" value="Bleu">Bleu</BR>
            <input type="radio" name="couleur" value="Rouge">Rouge</BR>
            <input type="radio" name="couleur" value="Vert">Vert
        
</BR>
        <p>Question 3: Quelle est l'âge de la majorité en Belgique?</p>
        
            <input type="radio" name="age" value="18">18 ans</BR>
            <input type="radio" name="age" value="21">21 ans</BR>
            <input type="radio" name="age" value="16">16 ans
        
</BR>
        <input type="submit" name="bValider" value="Valider">
    </form>

<?php
}
include('../footer.html');
?>