<?php

include "../entities/incident.php";
$response = "";

function addIncident(Incident $incident){
    include "../includes/db.inc.php";
    $incident_name = $incident->getName();          
    $reporting_time = $incident->getTime();       
    $reporting_date = $incident->getDate();
    $branch = $incident->getBranch();
    $priority = $incident->getPriority();
    $category = $incident->getCategory();
    $attending_staff = $incident->getAttendingStaff();
    $reporting_staff = $incident->getReportingStaff();

    $stmt = $link->prepare("INSERT INTO `incidents`(`incident`,`reported_by`,`attended_by`,`reporting_date`, `reporting_time`,`priority`,`status`,`category`,`branch`) 
    VALUES (?,?,?,?,?,?,?,?,?)");
    $stmt->execute([$incident_name, $reporting_staff, $attending_staff, $reporting_date, $reporting_time, $priority, 'pending', $category, $branch]);
    
    if ($stmt){
        $msg = "<p class='text-center alert alert-success'>Incident added successfuly</p>";          
    }else{
        $msg = "<p class='text-center alert alert-danger'>Failed</p>";  
    }
   return $msg;
}

function getIncident($id){
    $incident = array();
    include "../includes/db.inc.php";
    $sql = mysqli_query($link, "SELECT * FROM incidents where sno = '$id'");

    while($row = mysqli_fetch_assoc($sql)){
        $incident = new Incident();
        $incident ->setName($row['incident']);
        $incident->setTime($row['reporting_time']);
        $incident->setDate($row['reporting_date']);
        $incident->setcategory($row['category']);
        $incident->setAttendingStaff($row['attended_by']);
        $incident->setBranch($row['branch']);
        $incident->setPriority($row['priority']);
        $incident->setReportingStaff($row['reported_by']);
        $incident->setStatus($row['status']);
        $incident->setAction($row['action']);
        $incident->setFixDate($row['res_date']);
        $incident->setFixTime($row['res_time']);
    }
    return $incident;      



}


function getIncidents(){
    $incidents = array();
    include "../includes/db.inc.php";
    $sql = mysqli_query($link , "SELECT * FROM incidents");
    while($row = mysqli_fetch_assoc($sql)){
        $incidents[] = $row;
    }

    return $incidents;


}

function updateIncident($id, Incident $incident){
    include "../includes/db.inc.php";
    $incident_name = $incident->getName();          
    $date = $incident->getDate();
    $time = $incident->getTime();
    $branch = $incident->getBranch();
    $priority = $incident->getPriority();
    $category = $incident->getCategory();
    $attending_staff = $incident->getAttendingStaff();   
    $action = $incident->getAction();
    $status = $incident->getStatus();
    $sql = mysqli_query($link, "UPDATE incidents SET 
    status = '$status', 
    action = '$action', 
    res_date = '$date', 
    res_time='$time', 
    incident = '$incident_name',
    branch = '$branch',
    priority = '$priority',
    category = '$category',
    attended_by = '$attending_staff' 
    
    WHERE sno = '$id'");

    if($sql){
       header("location:./");
    }else{
        $message = "failed";
    }
    return $message;
}

function addReportingStaff($name, $branch){
    include "../includes/db.inc.php";
    try{
        $sql = mysqli_query($link, "INSERT INTO reporting_staff (name, branch) VALUES ('$name', '$branch')");
    
        if ($sql) {
            echo "<script>alert('success')</script>";
            header("location:../".$_GET['source']);
        }
    }catch(mysqli_sql_exception $e){
        echo "<script>alert('Staff exists.')</script>";
        header("location:../".$_GET['source']);
    }

}

function getReportingStaff(){
    $staff = array();
    include "../includes/db.inc.php";
    $sql = mysqli_query($link , "SELECT * FROM reporting_staff");
    while($row = mysqli_fetch_assoc($sql)){
        $staff[] = $row;
    }

    return $staff;
}

function getAttendingStaff(){
    $staff = array();
    include "../includes/db.inc.php";
    $sql = mysqli_query($link , "SELECT * FROM attending_staff");
    while($row = mysqli_fetch_assoc($sql)){
        $staff[] = $row;
    }

    return $staff;
}
function addAttendingStaff($name){
    include "../includes/db.inc.php";
    try {
        $sql = mysqli_query($link, "INSERT INTO attending_staff (name) VALUES ('$name')");

        if ($sql) {
            echo "<script>alert('success')</script>";
            header("location:../".$_GET['source']);
        }
    } catch (mysqli_sql_exception $e) {
        echo "<script>alert('Staff exists.')</script>";
        header("location:../".$_GET['source']);
    }
}
function getBranches(){
    $branches = array();
    include "../includes/db.inc.php";
    $sql = mysqli_query($link , "SELECT * FROM branches");
    while($row = mysqli_fetch_assoc($sql)){
        $branches[] = $row;
    }

    return $branches;
}
if(isset($_POST['add_rep_staff'])){
    addReportingStaff($_POST['name'], $_POST['branch']);
}

if (isset($_POST['add_it_staff'])) {
    addAttendingStaff($_POST['staff_name']);
    
}
if (isset($_POST['add_incident'])) {
    $incident = new Incident;

    $incident->setName($_POST['name']);
    $incident->setTime($_POST['reporting_time']);
    $incident->setDate($_POST['date']);
    $incident->setcategory($_POST['category']);
    $incident->setAttendingStaff($_POST['staff']);
    $incident->setBranch($_POST['branch']);
    $incident->setPriority($_POST['priority']);
    $incident->setReportingStaff($_POST['reporting_staff']);

    $response = addIncident($incident);
}

if (isset($_POST['update_incident'])) {
    $incident = new Incident;

    $incident->setName($_POST['name']);
    $incident->setTime($_POST['fix_time']);
    $incident->setDate($_POST['fix_date']);
    $incident->setcategory($_POST['category']);
    $incident->setAttendingStaff($_POST['staff']);
    $incident->setBranch($_POST['branch']);
    $incident->setPriority($_POST['priority']);
    $incident->setAction($_POST['action']);
    $incident->setStatus($_POST['status']);

    $response = updateIncident($_GET['id'], $incident);
}



?>