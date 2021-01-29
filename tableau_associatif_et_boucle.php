<?php
$coordonnees = array (
    'prenom' => 'Robert',
    'nom' => 'Redford',
    'adresse' => '6 Rue des Alouettes',
    'ville' => 'Bayonne');

foreach($coordonnees as $cle => $element)
{
    echo  '. '. $cle . ' = ' . $element . '<br />';
}
?>
