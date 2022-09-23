<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ngcares/includes/helpers.inc.php'; 
    include "functions.php";
    $incidents =  getIncidents();

    if(isset($_GET['add_form'])){
        include "addform.php";
    }
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Manage FCAs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../node_modules/datatables/datatables.min.css" />
    <script type="text/javascript" src="../node_modules/datatables/datatables.min.js"></script>

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
    <link href="../includes/local/dashboard.css" rel="stylesheet">
    <!-- editable css files -->
    <link href="../includes/local/sidebars.css" rel="stylesheet">
</head>

<body>
    <?php include "header.php"; ?>
    <div class="row">
        <?php include "sidebar.php" ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Manage Incidents</h1>


                    </div>

                </div>
                <div class="row mx-auto">

                        <div class="container col-md-8">
                            <div class="h-100 p-5 bg-light border border-dark rounded-3">
                    
                <form action="" method="post">
                        <?php echo $response; ?>           
                    <div class="form-group">
                        <label class="form-label" for="name">Incident</label>
                        <input class="form-control" type="text" id="name" name="name" >
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="reporting_staff">Reporting Staff</label>
                            <select name="reporting_staff" id="reporting_staff" class="form-control form-select">
                                <option value="1">Select Staff</option>
                                <?php $staff_list = getReportingStaff();
                                foreach ($staff_list as $staff) :

                                ?> <option value="<?php echo $staff['name']; ?>"><?php echo $staff['name']; ?></option>
                                <?php

                                endforeach;
                                ?>
                                
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="staff">Attending Staff</label>
                            <select name="staff" id="staff" class="form-control form-select">
                            <option value="1">Select Staff</option>
                                <?php $staff_list = getAttendingStaff();
                                foreach ($staff_list as $staff) :

                                ?> <option value="<?php echo $staff['name']; ?>"><?php echo $staff['name']; ?></option>
                                <?php

                                endforeach;
                                ?>
                                
                            </select>
                        </div>
                    </div>


                    <div class="row">
                    <div class="form-group col-md-4">
                            <label class="form-label" for="reporting_time">Reporting Branch</label>
                            <select name="branch" id="branch" class="form-control form-select">
                                
                                <?php $branch_list = getBranches();
                                foreach ($branch_list as $branch) :

                                ?> <option value="<?php echo $branch['name']; ?>"><?php echo $branch['name']; ?></option>
                                <?php

                                endforeach;
                                ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label" for="hdd">Priority</label>                           
                            <select name="priority" id="priority" class="form-control form-select">
                                
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                                
                            </select>

                        </div>
                        
                        <div class="form-group col-md-4">
                            <label class="form-label" for="hdd">Category</label>                           
                            <select name="category" id="category" class="form-control form-select">
                                
                                <option value="Hardware">Hardware</option>
                                <option value="Software">Software</option>
                                <option value="Network">Network</option>
                                <option value="Uncertain">Uncertain</option>
                                
                            </select>

                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="reporting_time">Reporting Date</label>
                            <input name="date" class="form-control" type="date" value="<?php echo date('mm-dd-yy'); ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="reporting_time">Reporting Time</label>
                            <input class="form-control" type="time" name="reporting_time" id="reporting_time">
                        </div>
                    </div>

                    <div class="form-group col-md-4 ">
                        <label for="add_incident"></label>
                       
                        <input class="btn btn-success form-control " name="add_incident" type="submit" />

                    </div>
                
            </form>
            </div>
                </div>
                </div>


            </div>

        </main>


    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>

    <script src="../includes/local/sidebars.js"></script>
    <script src="../includes/local/dashboard.js"></script>

    <script>
    $(document).ready(function() {
        var table = $('#users_table').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
    </script>


</body>

</html>