
<?php
require_once '../includes/header.php';
require_once '../includes/navbarAdmin.php';
require_once '../database.php';
$daftar=admin();
$lolos=lulus();
?>
<div class="dashboard_admin">
    <div>
        <h3>Jumlah Pendaftar</h3><hr>
        <h4><?= count($daftar) ?></h4>
    </div>    
    <div>
        <h3>Jumlah Diterima</h3><hr>
        <h4><?= count($lolos) ?></h4>
    </div>
    <div>
        <h3>Jumlah Ditolak</h3><hr>
    </div>
</div>
