<?php
require_once '../database.php';
require_once '../includes/header.php';
require_once '../includes/navbarAdmin.php';
    $id=$_GET["ID_JURUSAN"];
    $kuota=$_GET["KUOTA_JURUSAN"];
    $errors=[];
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        val_required($errors,"kuota",$_POST["KUOTA_JURUSAN"],"Kuota wajib diisi.");
        val_numeric($errors,"kuota",$_POST["KUOTA_JURUSAN"],"Kuota harus berupa angka.");
        if(empty($errors)){
            $stmnt=$pdo->prepare("UPDATE jurusan SET KUOTA_JURUSAN=:KUOTA_JURUSAN WHERE ID_JURUSAN=:ID_JURUSAN");
            $stmnt->execute([
                ":KUOTA_JURUSAN"=> $_POST["KUOTA_JURUSAN"],
                ":ID_JURUSAN"=> $id
            ]);
            header("Location:jurusan.php");
        }
        edit_kuota($id);
    }
?>
<div class="edit_kouta">
    <div>
        <form method="POST">
            <h2>Edit Kuota</h2>
            
            <div class="form-group">
                <label for="kuota_jurusan">Kuota :</label>
                <input type="text" id="kuota_jurusan" name="KUOTA_JURUSAN" value="<?= htmlspecialchars($kuota ?? '') ?>">
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn-submit">Edit</button>
                <a href="jurusan.php" class="btn-back">Kembali</a>
            </div>
        </form>
    </div>
</div>