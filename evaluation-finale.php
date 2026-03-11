<?php
$annuaire =["Maxime"];
$annuaire[]="Sophie";
$annuaire[]="Nedim";
$motDePasseAdmin="Tyrolium2026";
$ageMinimum=18;
$prenom = $_POST["prenom"];
$age = $_POST["age"];
$code = $_POST["code"];
$statut = $_POST["statut"];
function afficherBadge($prenom, $statut){
        if ($prenom == "Maxime"){
            echo "Badge généré : $prenom " . " Statut : Administrateur <br>";
        }else {
            echo "Badge généré : $prenom " . " Statut : $statut <br>";
        }

}
if (isset($prenom)){
    echo "Le formulaire est prêt a être envoyer <br>";
    echo "--------------------------------------------------------------------------------------------------- <br>";
}
if ($age >= $ageMinimum && $code == $motDePasseAdmin){
    $annuaire[]= $prenom;
    echo "Bienvenue, $prenom a été ajouté !";

}elseif ($age <= $ageMinimum || $statut == $statut[1]){
    echo "Erreur : Accès non autorisé pour ce profil.";
}else {
    echo "Erreur : Mot de passe administrateur incorrect.";
}






?>
<!DOCTYPE html>
<html lang="fr">
    <body>
        <form method="POST" action="evaluation-finale.php">
            <input type="text" name="prenom">
            <input type="number" name="age">
            <input type="password" name="code">
            <select name="statut">
                <option>Stagiaire</option>
                <option>Employé</option>
            </select>
            <button type="submit">Ajouter au répertoire</button>

        </form>
    <h3>Annuaire de l'Entreprise</h3>
    <?php
    foreach ($annuaire as $prenom){
        afficherBadge($prenom, "Employer");
         echo "--------------------------------------------------------------------------------------------------- <br>";

    }
    for($i=0; $i<3; $i++){
        echo "Emplacement bureau vide disponible...<br>";
        echo "--------------------------------------------------------------------------------------------------- <br>";
    }
    $chargement=0;
    while ($chargement < 2){
       echo "Synchronisation de la base de données...<br>";
        echo "--------------------------------------------------------------------------------------------------- <br>";
       $chargement++;
    }
    ?>
    </body>
</html>
