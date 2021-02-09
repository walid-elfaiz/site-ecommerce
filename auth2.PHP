<?php
session_start();
if(isset($_POST['cin']))
{
    $connexion=mysqli_connect('localhost','root','','maroc_pc');
    
  
    $username = $_POST['cin']; 
   
    if($username !== "" )
    {
        $requete = "SELECT count(*) FROM clients where   cin = '".$username."'";
        $exec_requete = mysqli_query($connexion,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) 
        {
           $_SESSION['cin'] = $username;
           header('Location: achat.html');
        }
        else
        {
           header('Location: auth.php?erreur=1'); 
        }
    }
    else
    {
       header('Location: auth.php?erreur=2');
    }
}
else
{
   header('Location: auth.php');
}

?>