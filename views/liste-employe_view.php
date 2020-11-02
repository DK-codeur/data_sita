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

        <!-- Left Sidebar End -->

        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">

                            <div class="col-sm-6">
                                <h4 class="page-title"> <i class="fa fa-users" aria-hidden="true"></i> Liste des employés</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenoms</th>
                                                <th>Genre</th>
                                                <th>Date de N.</th>
                                                <th>Telephone</th>
                                                <th>Email</th>
                                                <th>Lieu de Res.</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php foreach ($allEmploye as $index => $employe) : ?>
                                            <tr>
                                                <td><?= $employe['nom'] ?></td>
                                                <td><?= $employe['prenoms'] ?></td>
                                                <td><?= $employe['genre'] ?></td>
                                                <td><?= $employe['naissance'] ?></td>
                                                <td><?= $employe['telephone'] ?></td>
                                                <td><?= $employe['email'] ?></td>
                                                <td><?= $employe['residence'] ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


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