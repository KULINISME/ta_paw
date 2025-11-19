<?php
session_start();
if(!isset($_SESSION['isSiswa']) || $_SESSION['isSiswa']!=true){
    require_once '../cekLogin.inc';
    exit();
}
// require_once '../cekLogin.inc';
require_once '../includes/header.php';
require_once '../includes/navbarSiswa.php';
require_once '../homePage.php';
require_once '../includes/footer.php';

?>
