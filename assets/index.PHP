Informations sur la facture 
<br />
<br />
Numero de facture :
<?php
echo $_GET["numero"];
echo "<br />";
echo "Date de la facture : ";
echo $_GET["date"];
echo "<br />";
?>



Vous avez choisi le :

<?php

switch ($_GET["paiement"]){
	case "commande" :echo "Paiement a la commande"; break;
	case "livraison":echo "Paiement a la livraison"; break;
	
}
?>
<br />
<br />
Informations du client
 <br />
 <br />
 
<?php

echo "Nom du client  : " .$_GET["nom"];
echo"<br />";
echo " Numero de SIREN du client : ".$_GET["siren"];
echo"<br />";
echo " Adresse du client : ".$_GET["adresse"];
echo"<br />";
echo"Representant du client : " .$_GET["representant"];
echo "<br />";

?>
<br />
Description des missions : 

<?php
echo $_GET["description"];
echo"<br />";
echo "Montant hors taxe :  " ;
echo $_GET["prix"]." € ";
echo "<br />";

?>
<?php
$prixTaxes = 0;

switch($_GET["taxe"]){
	case "12.5" : $prixTaxes = $_GET["prix"] * 0.125 ;break;
	case"20" : $prixTaxes = $_GET["prix"] * 0.2 ;break;
}

echo 'Montant des taxes : '.$prixTaxes.'€';

echo"<br />";
$totalttc= $prixTaxes + $_GET["prix"];
echo "<br />";
echo "Montant TTC : " .$totalttc ." €";
?>



