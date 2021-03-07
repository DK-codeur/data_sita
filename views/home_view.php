<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= WEBSITE_TITLE . ' | ' . ucfirst($page); ?></title>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <?php include_once 'views/includes/header.php' ?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include_once 'views/includes/leftside.php' ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">

                            <div class="col-sm-6">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="font-16 text-uppercase mt-0">EFFECTIFS TOTAL</h5>
                                        <h4 class="font-500"><?= $countAllEmploye['total_employe'] ?></h4>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <i class="fa fa-male fa-2x text-primary" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="font-16 text-uppercase text-primary mt-0">EFFECTIFS HOMMES</h5>
                                        <h4 class="font-500 text-primary"><?= $countAllMen['total_men'] ?></h4>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <i class="fa fa-female fa-2x text-danger" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="font-16 text-uppercase text-danger mt-0">EFFECTIFS FEMMES</h5>
                                        <h4 class="font-500 text-danger"><?= $countAllWomen['total_women'] ?></h4>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4">
                                            <i class="fa fa-home fa-2x text-success" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="font-16 text-uppercase text-success mt-0">NOMBRE DE SITE</h5>
                                        <h4 class="font-500 text-success">0</h4>

                                    </div>

                                </div>
                            </div>
                        </div>




                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Dernière inscription</h4>

                                    <div class="table-responsive">
                                        <table class="table mb-0">

                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Prenoms</th>
                                                    <th>Telephone</th>
                                                    <th>Genre</th>
                                                    <th>Inscrit(e) le</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($latestEmploye as $index => $latEmploye) : ?>
                                                    <tr>

                                                        <td><?= $latEmploye['nom'] ?></td>
                                                        <td><?= $latEmploye['prenoms'] ?></td>
                                                        <td><?= $latEmploye['telephone'] ?></td>
                                                        <td><?= $latEmploye['genre'] ?></td>
                                                        <td> <?= date_format(date_create($latEmploye['registerAt']), "d-m-Y") ?> </td>
                                                    </tr>
                                                <?php endforeach; ?>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->



        </div>

        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    <?php include_once 'views/includes/footer.php' ?>

</body>

</html>