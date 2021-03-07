<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= WEBSITE_TITLE . ' | ' . ucfirst($page); ?></title>
</head>

<body>

    <div class="container">
        <div class="col-md-12">
            <div class="text-center">
                <a href="index.html" class="logo"><img src="assets/images/logo2.png"></a>
                <h4 class="font-18 m-b-5 text-center">Bienvenue !</h4>
                <p class="text-muted text-center">Inscrivez-vous</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div>
                    <form class="form-horizontal m-t-30" action="" method="POST">
                        <div class="my-3 text-center">
                            <div class="alert alert-<?= $isSuccess ? 'success' : 'danger' ?> bg-<?= $isSuccess ? 'success' : 'white' ?> text-white" role="alert">
                                <strong class="text-<?= $isSuccess ? 'white' : 'danger' ?>"><?= $error ?></strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="votre nom" value="<?= $nom ?>">
                                    <small class="text-danger"> <?= $nomError ?> </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="prenoms">Prenoms</label>
                                    <input type="text" class="form-control" name="prenoms" id="prenoms" placeholder="votre prenoms" value="<?= $prenoms ?>">
                                    <small class="text-danger"> <?= $prenomsError ?> </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <select name="genre" id="genre" class="form-control">
                                        <option value="">--choisir--</option>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                    <small class="text-danger"> <?= $genreError ?> </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="naissance">Date de Naissance</label>
                                    <input type="date" class="form-control" name="naissance" id="naissance" placeholder="votre date de naissance">
                                    <small class="text-danger"> <?= $naissanceError ?> </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telephone">Telephone</label>
                                    <input type="number" class="form-control" name="telephone" id="telephone" placeholder="votre numero de telephone" value="<?= $telephone ?>">
                                    <small class="text-danger"> <?= $telephoneError ?> </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="votre adresse email" value="<?= $email ?>">
                                    <small class="text-danger"> <?= $emailError ?> </small>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="residence">Lieu de residence</label>
                                    <input type="text" class="form-control" name="residence" id="residence" placeholder="votre lieu de residence" value="<?= $residence ?>">
                                    <small class="text-danger"> <?= $residenceError ?> </small>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                Je m'inscris
                            </button>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <a href="login" class="text-primary"><i class="mdi mdi-lock"></i> Connectez vous (admin only)</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- end wrapper-page -->



</body>

</html>