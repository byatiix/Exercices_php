<?php
$nomexercice ="Ex3.php";
include('../entete.php');

if(isset($_POST["bValider"]))
{
    $produit = $_POST["produit"];
    $quantite = $_POST["quantite"];
    $adress = $_POST["adress"];

    echo "Produit commandé: ". $produit ."</BR>";
    echo "Quantité: ". $quantite ."</BR>";
    echo "Adresse de livraison: ". $adress ."</BR>";

    if($quantite<5){

        switch($produit){
            case($produit == "ordinateur"):
                echo "Frais de livraison: 7.5€</BR>";
                echo "Coût total: ". $quantite*800 + 7.5 ." €";
                break;
            
            case($produit == "smartphone"):
                echo "Frais de livraison: 7.5€</BR>";
                echo "Coût total: ". $quantite*500 + 7.5 ." €";
                break;

            case($produit == "imprimante"):
                echo "Frais de livraison: 7.5€</BR>";
                echo "Coût total: ". $quantite*150 + 7.5 ." €";
                break;
        }
    }

    else{
        switch($produit){
            case($produit == "ordinateur"):
                echo "Frais de livraison: 0 €</BR>";
                echo "Coût total: ". $quantite*800 ." €";
                break;
            
            case($produit == "smartphone"):
                echo "Frais de livraison: 0 €</BR>";
                echo "Coût total: ". $quantite*500 ." €";
                break;

            case($produit == "imprimante"):
                echo "Frais de livraison: 0 €</BR>";
                echo "Coût total: ". $quantite*150 ." €";
                break;
        }
    }


}

else
{
    ?>
    <form action="Ex3.php" method="POST">
        <select name="produit" autofocus>
            <option value="ordinateur">Ordinateur</option>
            <option value="smartphone">Smartphone</option>
            <option value="imprimante">Imprimante</option>
        </select>
</BR>
        <p>Quantité:</p>
        <input type="number" name="quantite" required>
</BR>
        <p>Adresse de livraison: </p>
        <input type="text" name="adress" required>
        <input type="submit" name="bValider" value="Valider">
    </form>

<?php
}
include('../footer.html');
?>