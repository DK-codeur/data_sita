<?php
    include_once 'libs/phpqrcode/qrlib.php'; 

    $nom = $prenoms = $genre = $naissance = $telephone = $email = $residence = "";
    $nomError = $prenomsError = $genreError = $naissanceError = $telephoneError = $emailError = $residenceError = $error = "";
    $isSuccess = false;

    if( isset($_POST) && !empty($_POST))
        {
            $nom        = verifInput($_POST['nom']);
            $prenoms    = verifInput($_POST['prenoms']);
            $naissance  = verifInput($_POST['naissance']);
            $genre      = verifInput($_POST['genre']);
            $naissance  = verifInput($_POST['naissance']);
            $telephone  = verifInput($_POST['telephone']);
            $email      = verifInput($_POST['email']);
            $residence  = verifInput($_POST['residence']);

            $isSuccess = true;

            if(empty($nom))
                {
                    $nomError = 'Entrer un nom';
                    $isSuccess = false;
                }

            if(empty($prenoms))
                {
                    $prenomsError = 'Entrer un prenoms';
                    $isSuccess = false;
                }

            if (empty($genre)) {
                $genreError = 'Choisissez le genre';
                $isSuccess = false;
            }

            if(empty($naissance))
                {
                    $naissanceError = 'Saisissez la date de naissance';
                    $isSuccess = false;
                }

            if (!verifPhone($telephone)) {
                $telephoneError = 'numero incorrect';
                $isSuccess = false;
            }


            if(strlen($telephone) < 8 )
                {
                    $telephoneError = 'numero trop court';
                    $isSuccess = false;
                }

            if (!verifEmail($email)) {
                $emailError = 'Email invalide';
                $isSuccess = false;
            }

            if (empty($residence)) {
                $residenceError = 'Saisissez votre lieu de résidence';
                $isSuccess = false;
            }


            //----------------------------

            if($isSuccess)
                {
                    $req = Employe::insertEmploye($nom, $prenoms, $genre, $naissance, $telephone, $email, $residence);

                    QRcode::png(
                        'NOM: '.$nom, 
                        'temp/hello.png', 
                        QR_ECLEVEL_L, 
                        5
                    );
                    
                    $nom = $prenoms = $genre = $naissance = $telephone = $email = $residence = '';
                    $error = 'Inscription effectuée avec succès ! Merci';
                    header('refresh:3;');
                }

        }
