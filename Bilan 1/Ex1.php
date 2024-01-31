<?php
$nomexercice ="Ex1.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $operation = $_POST["operation"];

    switch($operation){
        case($operation == "addition"):
            echo "Résultat de l'opération (addition): ". $n1 + $n2;
            break;
        case($operation == "soustraction"):
            echo "Résultat de l'opération (soustraction): ". $n1- $n2;
            break;
        case($operation == "multiplication"):
            echo "Résultat de l'opération (multiplication): ". $n1 * $n2;
            break;
        case($operation == "division"):
            echo "Résultat de l'opération (division): ". $n1 / $n2;
            break;
        case($operation == "exposant"):
            echo "Résultat de l'opération (exposant): ". $n1 ** $n2;
            break;
    }

}

else
{
    ?>
    <form action="Ex1.php" method="POST">
        <label>Nombre 1:</label>
        <input type="number" name="n1" autofocus required>

        <label>Opération:</label>
        <select name="operation">
            <option value="addition">Addition</option>
            <option value="soustraction">soustraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
            <option value="exposant">Exposant</option>
        </select>

        <label>Nombre 2:</label>
        <input type="number" name="n2" required>
        <input type="submit" name="bValider" value="Calculer">
    </form>

    <?php
}
include('../footer.html')
?>