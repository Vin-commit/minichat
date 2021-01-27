<!DOCTYPE html>
<html="fr">
  <head>
    <meta charset="utf-8">
    <title>Mini Chat</title>
  </head>
  <body>
    <?php
// Créez un formulaire permettant de saisir le pseudo et le message pour le minichat
    ?>
    <form action="minichat_post.php" method="POST">
    <label>Pseudo :
      <input type="text" name="pseudo">
    </label>
    <label>Message :
    	<input type="text" name="message">
    </label>
    <input type="submit" value="Envoyer">
    <?php
    // Affiche les messages présents dans la table.
    include ("connectBD.php");

    $reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY `minichat`.`ID` DESC');
 
    // On affiche chaque entrée une à une
    while($données = $reponse->fetch())
    {
    ?>
    <p>
      <strong> <?php echo $données['pseudo']; ?></strong><br />
      <em><?php echo $données['message']; ?></em>
    </p>
    <?php
    }
    $reponse->closeCursor();
    ?>
  </body>
</html>