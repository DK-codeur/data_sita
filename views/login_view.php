<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= WEBSITE_TITLE . ' | ' . ucfirst($page); ?></title>
</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>

    <div class="wrapper-page account-page-full">

        <div class="card">
            <div class="card-body">

                <div class="text-center">
                    <a href="login.html" class="logo"><img src="assets/images/logo2.png"></a>
                </div>

                <div class="p-3">
                    <h4 class="font-18 m-b-5 text-center">Bienvenue Admin!</h4>
                    <p class="text-muted text-center">Connectez-vous</p>

                    <form class="form-horizontal m-t-30" action="" method="POST">

                        <div class="my-3 text-center">
                            <div class="alert alert-<?= $isSuccess ? 'success' : 'danger' ?> bg-<?= $isSuccess ? 'success' : 'white' ?> text-white" role="alert">
                                <strong class="text-<?= $isSuccess ? 'white' : 'danger' ?>"><?= $error ?></strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="votre email" value="<?= $email ?>">
                            <small class="text-danger"> <?= $emailError ?> </small>
                        </div>

                        <div class="form-group">
                            <label for="pass">Mot de passe</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="votre mot de passe" value="<?= $pass ?>">
                            <small class="text-danger"> <?= $passError ?> </small>
                        </div>

                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                            Se connecter
                        </button>


                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <a href="register" class="text-primary"><i class="mdi mdi-lock"></i> Inscrivez vous ici</a>
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