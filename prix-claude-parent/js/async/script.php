<?php
$success = 0;
$msg = "erreur script.php";
$data = [];

if (!empty($_POST['nom']) &&!empty($_POST['prenom']) &&!empty($_POST['email']) &&!empty($_POST['motdepasse'])
    &&!empty($_POST['confpasse']) &&!empty($_POST['adresse']) &&!empty($_POST['ville'])
    &&!empty($_POST['pays']) &&!empty($_POST['codepostal'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
        $confpasse = password_hash($_POST['confpasse'],PASSWORD_DEFAULT);
        $adresse = htmlspecialchars(strip_tags($_POST['adresse']));
        $ville = htmlspecialchars(strip_tags($_POST['ville']));
        $pays = htmlspecialchars(strip_tags($_POST['pays']));
        $codepostal = htmlspecialchars(strip_tags($_POST['codepostal']));

        if(strlen($nom) < 20 && strlen($prenom) < 20) {

            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //ajout de l'user en bdd
                
                $success = 1;
                $msg = "Inscription réussie";
                $data = [
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'email' => $email,
                    'motdepasse' => $motdepasse,
                    'confpasse' => $confpasse,
                    'adresse' => $adresse,
                    'ville' => $ville,
                    'pays' => $pays,
                    'codepostal' => $codepostal
                ];
            } else {
                $msg = "Veuillez saisir un email valide";
            }

        } else {
            $msg= "Champ invalide";
        }
}else {
    $msg="Veuillez tous les champs";
}

$res = ["success" => $success, "msg" => $msg, "data" => $data];
echo json_encode($res);

