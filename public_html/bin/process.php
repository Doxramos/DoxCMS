<?php
require_once "../../loader.php";
session_start();
$user = new user();
$vendor = new vendor();
switch($_POST['process']) {
    case "login": $user->Login($_POST['email'], $_POST['password']); break;
    case "logout": session_start(); session_destroy(); break;
    case "startsession": session_start(); $_SESSION['teamID'] = $_POST['teamID']; break;
    case "endsession": session_start(); unset($_SESSION['teamID']); break;
    case "createVendor":
    echo $vendor->CreateVendor($_POST['vendorname'], $_POST['street'], GetZipCode($_POST['street'], $_POST['city'], $_POST['state']), $_POST['city'], $_POST['state'], $_POST['vendorphone'], $_POST['vendoremail'], $_POST['teamsession']);
    break;
    case "deletevendor": echo $vendor->DeleteVendor($_POST['vendorID']); break;
    case "loadvendortable": echo $vendor->getData(); break;
    case "loadtopmessages": echo GetMessages(UserID()); break;
    case "checknew":    echo CheckNewMessages(UserID()); break;
    default: echo "Command Not Found";
}