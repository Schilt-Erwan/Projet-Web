<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'triplek', 'K3m@j0uK3rry');
    
$recuper = $bdd->prepare("CALL RecupereIdee");
$recuper->execute();
$tout=$recuperation->fetch(PDO::FETCH_ASSOC);
   

?>