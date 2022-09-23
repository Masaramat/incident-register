<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <div>
            <a href=" ./" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24">
                    <use xlink:href="#speedometer" />
                </svg>
                <span class="fs-5 fw-semibold">Dashboard</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="false">
                        <span class="mx-1"><i class="bi bi-house-door"></i></span>
                        Home
                    </button>
                    <div class="collapse" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="../" class="link-dark rounded">Overview</a></li>


                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="true">
                        <span class="mx-1"><i class="bi bi-person"></i></span>
                        Incidents
                    </button>
                    <div class="collapse show" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="./" class="link-dark rounded active">View</a></li>
                            <li><a href="./addform.php" class="link-dark rounded">New
                            Incident</a></li>

                        </ul>
                    </div>
                </li>

                <li class=" mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#fca-collapse" aria-expanded="false">
                        <span class="mx-1"><i class="bi bi-tags"></i></span>
                        Devices
                    </button>
                    <div class="collapse" id="fca-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="../devices" class="link-dark rounded">View</a></li>
                            <li><a href="../devices/add_device.php" class="link-dark rounded">Add Device</a></li>
                            <li><a href="add_device.php" class="link-dark rounded" data-bs-toggle="modal" data-bs-target="#add_os">Add OS</a></li>
                            <li><a href="add_device.php" class="link-dark rounded" data-bs-toggle="modal" data-bs-target="#add_domain">Add Domain</a></li>

                        </ul>
                    </div>
                </li>
                <li class=" mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#groups-collapse" aria-expanded="false">
                        <span class="mx-1"><i class="bi bi-people"></i></span>
                        Staff
                    </button>
                    <div class="collapse " id="groups-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                           
                            <li><a href="add_form.php" class="link-dark rounded" data-bs-toggle="modal" data-bs-target="#add_reporting_staff">Add Reporting Staff</a></li>
                            <li><a href="add_form.php" class="link-dark rounded" data-bs-toggle="modal" data-bs-target="#add_attending_staff">Add Attending Staff</a></li>
                        

                        </ul>
                    </div>
                </li>
                
                
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#account" aria-expanded="false">
                <i class="bi bi-person-square me-2"></i>
               Admin
            </button>
            <div class="collapse" id="account">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                    <li><a class="link-dark rounded" href=""><?php include_once '../logout.inc.html.php'; ?></a>
                    </li>

                </ul>
            </div>
        </li>
        </ul>

    </div>
    </div>
</nav>


<!-- Add reporting staff Modal -->
<div class="modal fade" id="add_reporting_staff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLabel">Add Reporting Staff</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./functions.php?source=incidents" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Branch</label>
                        <select type="text" class="form-control" name="branch">
                            <option value="">Select Branch</option>
                            <?php 
                                $branches = getBranches();
                                foreach($branches as $branch):
                            ?>
                                <option value="<?php echo $branch['name']; ?>"><?php echo $branch['name']; ?></option>
                            <?php
                            endforeach;
                            ?>

                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add_rep_staff" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Attending Staff Modal -->
<div class="modal fade" id="add_attending_staff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Attending Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="./functions.php?source=incidents" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="staff_name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add_it_staff">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add OS Modal -->
<div class="modal fade" id="add_os" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLabel">Add OS</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../devices/functions.php?source=incidents" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">OS</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add_os">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add OS Modal -->
<div class="modal fade" id="add_domain" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLabel">Add Domain</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../devices/functions.php?source=incidents" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Domain Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="ip">Domain IP</label>
                        <input type="text" class="form-control" name="ip">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add_domain">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>