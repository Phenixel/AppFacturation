<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phenixel</title>
   
    

    <!-- CDN -->

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.rendu.css" media="screen">
    <link rel="stylesheet" href="assets/css/impression.css" media="print">

</head>

<body>

    <header>

        <h1>Recapitulatif de votre facture </h1>

        <img src="assets/images/LogoPhenixel.png" >

    </header>
        <main>  
           
         <div class="parent">
            
            
            <div class="div1" > 
            Yonathan Cardoso
            <br />
            7 Boulevard henri poincaré
            <br />
            95200
            <br />
            SIRET : 903768257
            <br />
            <u><strong>Facturer a : </u></strong>
            <br />
            <?php 
            echo $_GET["nom"];
            ?>
           
            <br />
            <?php 
            echo  "N° de SIREN : " .$_GET["siren"];
            ?>
           
            <br />
            <?php 
            echo "Adresse du client : ".$_GET["adresse"] ;
            ?>
          
            <br />
           
            Representé par : <?php echo $_GET["representant"] ;?>
           
            </div>
                                                                                
            <div class="div2">
            Numero de facture : 
            <br />
            <?php
            echo $_GET["numero"]; ?>
                
                
            <br />
            &nbsp &nbsp &nbsp &nbsp &nbsp
            Date de la facture : 
            <br />
            <?php 
            echo $_GET["date"];

            ?>
          
            <br />

             Conditions : 
             <br />
             <?php

switch ($_GET["paiement"]){
	case "commande" :echo "Paiement a la commande"; break;
	case "livraison":echo "Paiement a la livraison"; break;
	
}
?>
            
            </div>


            <div class="div3">
                <table  class="tableau">
                <tr>
                    <td><strong>Description </strong></td>
            
                    <td><strong> Montant </strong></td>
            
                    <td><strong>Taxes</strong></td>
                </tr>
            
                </table>
        
                <table >
                <tr >
                    <td> <?php
                    echo $_GET["description"]; ?> </td>
            
                    <td><?php echo $_GET["prix"]."€"; ?></td>
            
                    <td><?php echo $_GET["taxe"]."%" ;?></td>
            
                </tr>
                <tr>
                    <td>
                    <?php
                    //  echo $_GET["description2"];?>
                    <!-- </td> -->
                    <!-- <td> <?php // echo $_GET["prix2"]."€";?></td> -->
                    <!-- <td> <?php // echo $_GET["taxe2"]."%";?></td> -->
                </tr>        
                </table>
                  
</div>   
                          
        <div class="div4">
                <table class="iban">
        <tr>
             <td>    
                Yonathan Cardoso   
             </td>
        </tr>
        
        <tr>
            <td>
                IBAN : FR763000403377000629
            
            </td>
        </tr>
        <tr>
            <td>
            BIC : BNPAFRPXXX
            </td>
        </tr>
        
                </table>
        <?php
        echo "Montant hors taxe : ";
        
        echo $_GET["prix"]."€" /*+ $_GET["prix2"]."€"*/;
        
        ?>
        <?php
    $prixTaxes = 0;

switch($_GET["taxe"]){
	case "12.5" : $prixTaxes = $_GET["prix"] * 0.125 ;break;
	case "20" : $prixTaxes = $_GET["prix"] * 0.2 ;break;
}


  /*  $prixTaxes2=0;
switch($_GET["taxe2"]){
	case "12.5" : $prixTaxes2 = $_GET["prix2"] * 0.125 ;break;
	case "20" : $prixTaxes2 = $_GET["prix2"] * 0.2 ;break;
}
*/
echo "<br />";

    $prixTaxesTotal=$prixTaxes /*+$prixTaxes2*/ ;

echo 'Montant des taxes : '.$prixTaxesTotal.'€';

    $totalttc= $prixTaxesTotal + $_GET["prix"] /*+ $_GET["prix2"]."€"*/;
echo "<br />";
echo "Montant a payer : " .$totalttc ;
?>

                                              
              </div>

                            <br />        
                            <div class="div5">
                            Contact : <a href="contact@phenixel.fr"> yonathancardoso@outlook.fr </a>
                            <br />
                            
                            <strong>PHENIXEL.FR</strong>
                

  
</div>
<script>window.print();</script> 
</body>
</html>