<?php
// Création de la chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définition des voyelles
$vowels = "aeiouAEIOU";

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Vérification si le caractère actuel est une voyelle
    if (strpos($vowels, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>
