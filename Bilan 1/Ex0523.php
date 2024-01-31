<?php
$nomexercice = "Ex0523.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $temperature = $_POST["temp"];
    echo "$temperature °F = " . ($temperature-32)*5/9 . " °C";
}

else
{
?>
    <form action="Ex0523.php" method="POST">
    <p>Degré (°F): </p>
    <input type="text" name="temp" size="3" autofocus>
    <input type="submit" name="bValider" value="Valider">
    </form>
<?php
}
include('../footer.html');
?>