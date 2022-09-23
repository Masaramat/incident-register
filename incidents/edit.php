<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/ngcares/includes/helpers.inc.php'; 
    include "functions.php";
    $incident =  getIncident($_GET['id']);
    
    
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
    label{
        font-weight: 700;
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
                        <h1 class="h2">Update Incident</h1>


                    </div>

                </div>
                <div class="row mx-auto">

                        <div class="container col-md-8">
                            <div class="h-100 p-5 bg-light border border-dark rounded-3">
                    
                <form action="" method="post">
                        <?php echo $response; ?>           
                    <div class="form-group mb-2">
                        <label class="form-label" for="name">Incident</label>
                        <input class="form-control" type="text" id="name" name="name" value="<?php echo $incident->getName(); ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label class="form-label" for="name">Action</label>
                        <textarea class="form-control" id="action" name="action"><?php htmlout($incident->getAction()); ?></textarea>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-md-4">
                            <label class="form-label" for="fix_date">Fix Date</label>
                            <input name="fix_date" class="form-control" type="date" value="<?php echo $incident->getFixDate(); ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="fix_time">Fix Time</label>
                            <input class="form-control" type="time" name="fix_time" id="fix_time" value="<?php echo $incident->getFixTime(); ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="reporting_time">Status</label>
                            <select class="form-control form-select" name="status" id="status">
                            <option selected value="<?php echo $incident->getStatus(); ?>"><?php echo $incident->getStatus(); ?></option>
                            <option value="Fixed">Fixed</option>
                            <option value="Replaced">Replaced</option>
                            
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="reporting_staff">Reporting Staff</label>
                            <select disabled name="reporting_staff" id="reporting_staff" class="form-control form-select">
                                <option selected value="<?php echo $incident->getReportingStaff(); ?>"><?php echo $incident->getReportingStaff(); ?></option>
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
                            <option selected value="<?php echo $incident->getAttendingStaff(); ?>"><?php echo $incident->getAttendingStaff(); ?></option>
                                <?php $staff_list = getAttendingStaff();
                                foreach ($staff_list as $staff) :

                                ?> <option value="<?php echo $staff['name']; ?>"><?php echo $staff['name']; ?></option>
                                <?php

                                endforeach;
                                ?>
                                
                            </select>
                        </div>
                    </div>


                    <div class="row mb-2">
                    <div class="form-group col-md-4">
                            <label class="form-label" for="reporting_time">Reporting Branch</label>
                            <select name="branch" id="branch" class="form-control form-select">
                            <option selected value="<?php echo $incident->getBranch(); ?>"><?php echo $incident->getBranch(); ?></option>
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
                            <option selected value="<?php echo $incident->getPriority(); ?>"><?php echo $incident->getPriority(); ?></option>
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                                
                            </select>

                        </div>
                        
                        <div class="form-group col-md-4">
                            <label class="form-label" for="hdd">Category</label>                           
                            <select name="category" id="category" class="form-control form-select">
                            <option selected value="<?php echo $incident->getCategory(); ?>"><?php echo $incident->getCategory(); ?></option>
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
                            <input disabled name="date" class="form-control" type="date" value="<?php echo $incident->getDate(); ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="reporting_time">Reporting Time</label>
                            <input disabled class="form-control" type="time" name="reporting_time" id="reporting_time" value="<?php echo $incident->getTime(); ?>">
                        </div>
                    </div>

                    <div class="form-group col-md-4 ">
                        <label for="add_incident"></label>
                       
                        <input class="btn btn-success form-control " name="update_incident" type="submit" value="Update Incident"/>

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