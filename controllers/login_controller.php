<?php
session_start();

$email = $pass = $emailError = $passError = $error = "";
$isSuccess = false;
$emailOk = false;
$msg = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {

    $email = verifInput($_POST['email']);
    $pass = verifInput($_POST['pass']);

    $isSuccess = true;
    $emailOk = true;

    if (empty($email)) {
        $emailError = 'Entrez votre email';
        $isSuccess = false;
    }

    if (!verifEmail($email)) {
        $emailError = 'Email invalide';
        $isSuccess = false;
        $emailOk = false;
    }

    if (empty($pass)) {
        $passError = 'Entrez votre Mot de Passe';
        $isSuccess = false;
    }

    if (strlen($pass) < 4) {
        $passError = 'Mot de Passe trop court';
        $isSuccess = false;
    }

    //------------------
    if ($isSuccess && $emailOk) {
        $adm = Adm::getEmailPass($email, md5($pass)); //password_hash($pass, PASSWORD_BCRYPT)

        if ($adm != false) {
            $_SESSION['adm'] = $adm;

                $error = 'Connexion reussie ! Redirection en cours...';
                header('refresh:3;url=home');


            // if ($_SESSION['isAdmin'] == 1)
            //     {
            //         header('location:admin');
            //         exit();
            //     }

        } else {
            $error = 'Email ou mot de passe incorrect';
            $isSuccess = false;
        }
    }
}
