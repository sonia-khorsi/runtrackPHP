<?php
// Vérifie si des arguments ont été passés via $_GET
if (!empty($_GET)) {
    // Compte le nombre d'arguments dans $_GET
    $count = count($_GET);
    echo "Le nombre d'arguments GET est : $count<br />";

    // Affiche chaque argument et sa valeur
    foreach ($_GET as $key => $value) {
        echo "Clé : $key, Valeur : $value<br />";
    }
} else {
    echo "Aucun argument GET n'a été transmis.";
}
?>
