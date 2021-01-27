<!DOCTYPE html>
<html="fr">
  <head>
    <meta charset="utf-8">
    <title>Mini Chat</title>
  </head>
  <?php
    
    include("connectBD.php");
    // Insère un nouvel enregistrement dans la table et redirige vers minichat.php

    if (($_POST['pseudo']!="") AND $_POST['message']!="") 
    {
	    // Effectuer ici la requête qui insère le message
	    $req = $bdd->prepare('INSERT INTO `minichat`(`ID`, `pseudo`, `message`) VALUES (NULL, :pseudo, :message)');
	    $req->execute(array(
	      'pseudo' => htmlspecialchars($_POST['pseudo']),
	      'message' => htmlspecialchars($_POST['message'])
	  ));
	}
    // Puis redirige vers minichat.php comme ceci : pas d'illogisme en envoyant du html !
    header('Location: minichat.php');
    // Le visiteur ne verra jamais la page minichat_post.php . Celle-ci n'affiche rien, mais commande en revanche au navigateur du visiteur de retourner sur minichat.php
  ?>
</html>