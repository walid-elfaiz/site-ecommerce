
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="STYLE1.CSS" />
<title>SITE WEB MAROC PC</title>
</head>    
<body>
    <?php
    
 $connexion=mysqli_connect('localhost','root','','maroc_pc');
 $NOM=$_POST["nom"];
 $NUM_TEL=$_POST["numtel"];
 $CIN=$_POST['CN'];
 $query=" INSERT INTO clients (	NOM_CLIENT,TEL_CLIENT,cin) values ('$NOM','$NUM_TEL','$CIN')";
 $resultat=mysqli_query($connexion,$query);
 header('Location: auth.php');
    ?>
</body>
</html>