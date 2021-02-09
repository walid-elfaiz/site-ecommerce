<?php
$connexion=mysqli_connect('localhost','root','','maroc_pc');
?>
<html>
<head>
<link rel="stylesheet" href="style4.css"  />
<title>Commande</title>
</head>
<body>
<?php 

if (isset($_POST['NP'])) {

	
    $sql = 'SELECT * FROM materiel WHERE num_produit = "'.$_POST['NP'].'"';
    $client='SELECT * FROM clients WHERE cin = "'.$_POST['cin'].'"';
    $nom_prod=$_POST["NP"];
    $cin=$_POST['cin'];
    $query="INSERT INTO commande (num_produit,cin) values ('$nom_prod', '$cin')";
    $resultat=mysqli_query($connexion,$query);
	
	$req = mysqli_query($connexion,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
    $req2 = mysqli_query($connexion,$client) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());


	
    $data = mysqli_fetch_array($req);
    $data2 = mysqli_fetch_array($req2);


    mysqli_free_result ($req);
    mysqli_free_result ($req2);

    
}
echo "<center><table border='4' class='stats' cellspacing='0'>

            <tr>
            <td class='hed' colspan='8'>Votre Commande</td>
              </tr>
            <tr>
            <th>Nom Client</th>
            <th>Nom Produit</th>
            <th>Prix</th>
            

            </tr>";

              echo "<tr>";
              echo "<td>" . $data2['NOM_CLIENT'] . "</td>";
              echo "<td>" . $data['nom_produit'] . "</td>";
              echo "<td>" . $data['prix_produit'] ."DH </td>";
              

              echo "</tr>";

             

    echo "</table></center>";
    echo "<center><h2>On sera ravi de vous vendre plus !!!! Revenez pour tels offres.</h2></center>"

?>


<center><a href="index1.html"><button class="back_btn">Revenir au site </button></a></center>
</body>
</html>

