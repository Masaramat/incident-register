<?php

function getIncidentCount(){
    include "includes/db.inc.php";
    $sql = mysqli_query($link, "SELECT * FROM incidents");
    return $sql->num_rows;
}

function getDevicesCount()
{
    include "includes/db.inc.php";
    $sql = mysqli_query($link, "SELECT * FROM devices");
    return $sql->num_rows;
}

function getReportingStaffCount()
{
    include "includes/db.inc.php";
    $sql = mysqli_query($link, "SELECT * FROM reporting_staff");
    return $sql->num_rows;
}

function getAttendingStaffCount()
{
    include "includes/db.inc.php";
    $sql = mysqli_query($link, "SELECT * FROM attending_staff");
    return $sql->num_rows;
}
function getBranches(){
    $branches = array();
    include "includes/db.inc.php";
    $sql = mysqli_query($link , "SELECT * FROM branches");
    while($row = mysqli_fetch_assoc($sql)){
        $branches[] = $row;
    }

    return $branches;
}

?>