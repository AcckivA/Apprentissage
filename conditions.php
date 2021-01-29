<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
<?php
$age = 20;
 
if ($age <= 18) // SI l'âge est inférieur ou égal à 18
{
    echo "Vous n'êtes pas majeur passez votre chemin !<br />";
    $autorisation_entrer = "Non";
}
else // SINON
{
    echo "Vous êtes majeur, Bienvenue sur ce site !<br />";
    $autorisation_entrer = "Oui";
}
 
echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
?>
 </body>
</html>
