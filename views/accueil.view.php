<?php

// require de template
// ici affichage des card en utilisant le require du controller correspondant
echo "Accueil";
// ici je construis ma card pour injectéles donnée a partir du AccueilController 
?>
<?php foreach ($annonce as $value):extract($value)?>
<p><?= $titre?></p>
<?php endforeach ?>