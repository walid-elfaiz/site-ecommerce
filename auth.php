<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style2.css"  />
    </head>
    <body>
        
    <form class="formulaire" action="auth2.php" method="POST">
     <h3>authentification:</h3> 
    <input type="texte" name="cin" placeholder="Entrez VOTRE CIN ">      
      <input type="submit"  name="envoyer" id="ev">    
      <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>CIN incorrect</p>";
                }
                ?>
   
   </FORM>
            
            
        
    </body>
</html>