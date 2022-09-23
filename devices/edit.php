<?php
include "functions.php";

$device = getDevice($_GET['id']);
$message = "";





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Edit Device</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <!-- Bootstrap core CSS -->
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

    <div class="container-fluid">
        <div class="row">
            <?php include "sidebar.php"; ?>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Register Incident</h1>

                        </div>
                    </div>
                    <div class="row mx-auto">

                        <div class="container col-md-10">
                            <div class="h-100 p-5 bg-light border border-dark rounded-3">


                                <form action="" method="post">
                                    <?php echo $response; ?>
                                    <?php foreach ($device as $device) : ?>
                                        <div class="row mb-2">
                                            <div class="form-group col-md-8">
                                                <label class="form-label" for="name">Device Name</label>
                                                <input class="form-control" type="text" id="name" name="device_name" value="<?php echo $device['name']; ?>" />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="device_type">Device Type</label>
                                                <select class="form-control form-select"  id="device_type" name="device_type" >
                                                <option selected><?php echo $device['device_type']; ?></option>
                                                    <option value="">Select Device Type</option>
                                                    <option value="Physical">Physical</option>
                                                    <option value="VM">VM</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-2">
                                        <div class="form-group col-md-6">
                                                <label class="form-label" for="staff">User</label>
                                                <select name="staff" id="staff" class="form-control form-select">
                                                    <option selected><?php echo $device['user']; ?></option>
                                                    <?php $staff_list = getStaff();
                                                    foreach ($staff_list as $staff) :

                                                    ?> <option value="<?php echo $staff['name']; ?>"><?php echo $staff['name']; ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="os">Operating System</label>
                                                <select name="os" id="os" class="form-control form-select">
                                                    <option selected><?php echo $device['os']; ?></option>
                                                    <?php $os_list = getOs();
                                                    foreach ($os_list as $os) :
                                                    ?> <option value="<?php echo $os['os_name']; ?>"><?php echo $os['os_name']; ?></option>
                                                    <?php

                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            
                                        </div>


                                        <div class="row mb-2">
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="reporting_time">Memory</label>
                                                <input type="text" name="memory" class="form-control" value="<?php echo $device['memory']; ?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="reporting_time">Memory Type</label>
                                                <select name="memory_type" id="memory_type" class="form-control form-select">
                                                    <option selected><?php echo $device['memory_type']; ?></option>
                                                    <option value="DDR1">DDR1</option>
                                                    <option value="DDR2">DDR2</option>
                                                    <option value="DDR3">DDR3</option>
                                                    <option value="DDR4">DDR4</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="hdd">HDD</label>
                                                <input class="form-control form-date" type="text" name="hdd" id="hdd" value="<?php echo $device['hdd']; ?>">

                                            </div>
                                            

                                        </div>
                                        <div class="row mb-2">
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="reporting_time">Branch</label>
                                                <select name="branch" id="branch" class="form-control form-select">
                                                    <option selected><?php echo $device['branch']; ?></option>
                                                    <?php $branch_list = getBranches();
                                                    foreach ($branch_list as $branch) :

                                                    ?> <option value="<?php echo $branch['name']; ?>"><?php echo $branch['name']; ?></option>
                                                    <?php

                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="architecture">Architecture</label>
                                                <input class="form-control form-date" disabled type="text" name="architecture" id="architecture" value="<?php echo $device['architecture']; ?>">

                                            </div>

                                        </div>
                                        <div class="row mb-2">
                                            
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="status">Status</label>
                                                <select name="status" id="status" class="form-control form-select">
                                                    <option selected><?php echo $device['status']; ?></option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="domain">Domain</label>
                                                <select name="domain" id="domain" class="form-control form-select">
                                                    <option selected><?php echo $device['domain']; ?></option>
                                                    <option >None</option>
                                                    <?php $domain_list = getDomain();
                                                    foreach ($domain_list as $domain) :
                                                    ?> <option value="<?php echo $domain['domain_name'] . ' (' . $domain['domain_ip'] . ')'; ?>"><?php echo $domain['domain_name'] . ' (' . $domain['domain_ip'] . ')'; ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group col-md-4 ">
                                            <label for="adduser"></label>
                                            <input type="hidden" name="id" value="<?php echo $device['id']; ?>" />
                                            <input class="btn btn-success form-control " name="edit_device" type="submit" />

                                        </div>
                                    <?php endforeach; ?>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
        </div>

        </main>
    </div>
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
</body>

</html>