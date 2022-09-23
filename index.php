<?php

include_once "functions.php";


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>NG-CARES DATABASE for RA2</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="node_modules/DataTables/datatables.min.css" />
    <script type="text/javascript" src="node_modules/DataTables/datatables.min.js"></script>

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="includes/local/dashboard.css" rel="stylesheet">
    <!-- editable css files -->
    <link href="includes/local/sidebars.css" rel="stylesheet">
</head>

<body>
    <?php include "header.php"; ?>
    <div class="row">
        <?php include "sidebar.php"; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Light MFB: Incident Register</h1>



                    </div>

                </div>
                <div class="row my-4 p-4">
                    <div class="col-sm-6">
                        <div class="card border border-success bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Incidents</h5>
                                <p class="card-text">Total Incidents: <?php echo getIncidentCount(); ?></p>
                                <a href="incidents/" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border border-warning bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Devices</h5>
                                <p class="card-text">Total Devices: <?php echo getDevicesCount(); ?></p>
                                <a href="devices/" class="btn btn-danger">Manage </a>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="row my-3 p-4">
                    <div class="col-sm-6">
                        <div class="card border border-danger bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Attending Staff</h5>
                                <p class="card-text">Total Attending Staff: <?php echo getAttendingStaffCount(); ?></p>
                                <a href="#" class="btn btn-warning">Manage </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border border border-success bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Reporting Staff</h5>
                                <p class="card-text">Total Reporting Staff: <?php echo getReportingStaffCount(); ?></p>
                                <a href="#" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                   
                </div>

            </div>

        </main>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>

    <script src="includes/local/sidebars.js"></script>
    <script src="includes/local/dashboard.js"></script>

</body>

</html>