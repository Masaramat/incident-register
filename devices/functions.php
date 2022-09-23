<?php

include "../entities/device.php";
$response = "";

function getDevices(){
    include "../includes/db.inc.php";
    $devices = array();
    $sql = mysqli_query($link, "SELECT * FROM devices");
    while ($row = mysqli_fetch_assoc($sql)) {
       
        $devices[] = $row;
    }
    return $devices;
}

function addOs($name){
    include "../includes/db.inc.php";
    try {
        $sql = mysqli_query($link, "INSERT INTO os (name) VALUES ('$name')");

        if ($sql) {
            echo "<script>alert('success')</script>";
            header("location:../".$_GET['source']);
        }
    } catch (mysqli_sql_exception $e) {
        echo "<script>alert('Staff exists.')</script>";
        header("location:../".$_GET['source']);
        
    }
}

function addDomain($name, $ip){
    include "../includes/db.inc.php";
    try {
        $sql = mysqli_query($link, "INSERT INTO domain (domain_name, domain_ip) VALUES ('$name', '$ip')");

        if ($sql) {
            echo "<script>alert('success')</script>";
            header("location:../".$_GET['source']);
        }
    } catch (mysqli_sql_exception $e) {
        echo "<script>alert('Staff exists.')</script>";
        header("location:../".$_GET['source']);
    }
}

function getOs(){
    include "../includes/db.inc.php";
    $os = array();
    $sql = mysqli_query($link, "SELECT * FROM os");
    while ($row = mysqli_fetch_assoc($sql)) {
       
        $os[] = $row;
    }
    return $os;
}

function getDomain(){
    include "../includes/db.inc.php";
    $manains = array();
    $sql = mysqli_query($link, "SELECT * FROM domain");
    while ($row = mysqli_fetch_assoc($sql)) {
       
        $domains[] = $row;
    }
    return $domains;
}

function getStaff(){
    $staff = array();
    include "../includes/db.inc.php";
    $sql = mysqli_query($link , "SELECT * FROM reporting_staff");
    while($row = mysqli_fetch_assoc($sql)){
        $staff[] = $row;
    }

    return $staff;
}

if (isset($_POST['add_os'])) {
    addOs($_POST['name']);
}

if (isset($_POST['add_domain'])) {
    addDomain($_POST['name'], $_POST['ip']);
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

function addDevice(Device $device) {
    try{
    include "../includes/db.inc.php";
    $name = $device->getName();
    $staff = $device->getStaff();
    $os = $device->getOperatingSystem();
    $memory = $device->getMemory();
    $hdd = $device->getHdd();
    $branch = $device->getBranch();
    $architecture = $device->getArchitecture();
    $status = $device->getStatus();
    $domain = $device->getDomain();
    $memory_type = $device->getMemoryType();

    $device_type = $device->getDeviceType();

    $stmt = $link->prepare("INSERT INTO `devices`
    (`name`,`user`,`os`,`memory`,`hdd`, `branch`,`architecture`,`status`,`domain`, `memory_type`, `device_type`) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute([$name, $staff, $os, $memory, $hdd, $branch, $architecture, $status, $domain, $memory_type, $device_type]);

    if ($stmt) {
        return "<p class='text-center alert alert-success'>Device added successfuly</p>";
    } else {
        return "<p class='text-center alert alert-danger'>Failed</p>";
    }
}
    catch
    (mysqli_sql_exception $e){
        return
        "<p class='text-center alert alert-danger'>Failed (Device already exist)</p>".$e;
    }
    return $msg;
}

if (isset($_POST['add_device'])) {
    $device = new Device;
    $device->setName($_POST['name']);
    $device->setStaff($_POST['staff']);
    $device->setOperatingSystem($_POST['os']);
    $device->setMemory($_POST['memory']);
    $device->setHdd($_POST['hdd']);
    $device->setBranch($_POST['branch']);
    $device->setArchitecture($_POST['architecture']);
    $device->setStatus($_POST['status']);
    $device->setDomain($_POST['domain']);
    $device->setMemoryType($_POST['memory_type']);
    $device->setDeviceType($_POST['device_type']);


    $response = addDevice($device);
}

function getDevice($id){
    $device = array();
    include "../includes/db.inc.php";
    $sql = mysqli_query($link, "SELECT * FROM devices where id = '$id'");

    while ($row = mysqli_fetch_assoc($sql)) {
        $device[] = $row;
    }
    return $device;
}

function updateDevice($id, Device $device){
    try {
        include "../includes/db.inc.php";
       $name = $device->getName();
        $staff = $device->getStaff();
        $os = $device->getOperatingSystem();
        $memory = $device->getMemory();
        $hdd = $device->getHdd();
        $branch = $device->getBranch();
        
        $status = $device->getStatus();
        $domain = $device->getDomain();
        $memory_type = $device->getMemoryType();
        $device_type = $device->getDeviceType();

        $stmt = $link->prepare("UPDATE devices SET name=?, user =?,os =? ,memory = ?,hdd = ?, branch = ? ,status = ?,domain = ?, memory_type =?, device_type = ? 
        WHERE id = ?");
        $stmt->execute([$name, $staff, $os, $memory, $hdd, $branch, $status, $domain, $memory_type, $device_type, $id]);

        if ($stmt) {
            
            header("location:./");

        } elseif(mysqli_errno($link) == 1062) {
            return "<p class='text-center alert alert-danger'>Device Exists</p>";
        }
    }catch(Exception $e){
        return "<p class='text-center alert alert-danger'>Device Exists</p>";
    }

}

if(isset($_POST['edit_device'])){
    $device = new Device;
    $device->setName($_POST['device_name']);
    $device->setStaff($_POST['staff']);
    $device->setOperatingSystem($_POST['os']);
    $device->setMemory($_POST['memory']);
    $device->setHdd($_POST['hdd']);
    $device->setBranch($_POST['branch']);
    $device->setStatus($_POST['status']);
    $device->setDomain($_POST['domain']);
    $device->setMemoryType($_POST['memory_type']);
    $device->setDeviceType($_POST['device_type']);

    $id = $_POST['id'];

    $response = updateDevice($id, $device);
    
}





?>