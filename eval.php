<?php
       if (isset($_POST['choix'])&&(!isset($_COOKIE['choix']))){ 
           setcookie("choix",$_POST['choix'],time()+5);
    }
       
      
       
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Evaluation du cours PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
    <h1>Comment trouvez vous le contenu du cours PHP?</h1>
    <?php if (isset($_COOKIE['choix'])) {
         echo 'Vous avez déjà voté pour: '.$_COOKIE['choix'];
    } else{
         ?>
    <form action="" method="post">
        <input type="radio" name="choix" value="bon"  >Bon <br><br>
        <input type="radio" name="choix" value="moyen" >Moyen <br><br>
        <input type="radio" name="choix" value="mauvais">Mauvais <br><br>  
       
        <input type="submit" value="envoyer">
   </form>
   
    <?php }
        ?>

    </body>
</html>