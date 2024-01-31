<?php
$nomexercice = "Ex0501.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $somme = round($n1 + $n2, 2);
    $diff = round($n1 - $n2, 2);
    $mult = round($n1 * $n2, 2);

    if($n2!=0)
    {
        $div = round($n1 / $n2, 2);
        echo "La somme est de ". $somme ."</BR>";
        echo "La différence est de ". $diff ."</BR>";
        echo "Le résultat de la multiplication est de ". $mult ."</BR>";
        echo "Le résultat de la division est de ". $div ."</BR>";
    }

    else
    {
        echo "La somme est de ". $somme ."</BR>";
        echo "La différence est de ". $diff ."</BR>";
        echo "Le résultat de la multiplication est de ". $mult ."</BR>";
    }
    
   

}

else
{
?>
<form action="Ex0501.php" method="POST">
    <p>Nombre 1: </p>
    <input type="number" name="n1" size="3" autofocus>
    <p>Nombre 2:</p>
    <input type="number" name="n2" size="3">
    <input type="submit" name="bValider" value="Valider">
</form>

<?php
}
include('../footer.html');
?>
