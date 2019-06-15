<?php
$type = $_GET['type'];

switch ($type) {
    case 'ajout':
        include 'ajoutEmp.php';
        break;
    
    case 'update':
        include 'AfficheUpdateEmp.php';
        break;
    
    default:
        # code...
        break;
}

?>