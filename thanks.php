<?php

// echo var_dump($_POST);

$errors = [];

if (!isset($_POST['user_name']) || trim($_POST['user_name']) === '')
    $errors[] = "Le nom est obligatoire";
if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '')
    $errors[] = "Le mail est obligatoire";
if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '')
    $errors[] = "Le téléphone est obligatoire";
if (!isset($_POST['subject']) || trim($_POST['subject']) === '')
    $errors[] = "Le sujet du mail est obligatoire";
if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
    $errors[] = "Le message est obligatoire";
    

$email = $_POST['user_email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'adresse mail n'est pas valide";
}


if (empty($errors)) {
echo 'Merci ' . $_POST['user_firstname'] .' ' . $_POST['user_name'] . ' de nous avoir contacté à propos de “'.$_POST['subject']. '”' ."<br/>";
echo "<br>";
echo 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email'] .' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande :' . "<br/>";
echo "<br/>";
echo $_POST['user_message'];
} else {
    echo "<h2>Il y a des problèmes sur les éléments suivants :</h2>". "<br>";
    for ($i = 0 ; $i < count($errors);$i++) {
    echo $errors[$i]. "<br>";
    }

}

?>