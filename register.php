<?php
    require_once 'database.php';
    require_once 'includes/header.php';
?>
<div>
    <form action="" method="POST">
        <fieldset>
            <legend>Register</legend>
            <label for="">Nama</label>
            <input type="text" name="nama"placeholder="nama lengkap">
            <label for="">Email</label>
            <input type="text" name="email">
            <label for="">Password</label>
            <input type="text" name="pass">
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</div>
<?php
if(isset($_POST['submit'])){
    register($_POST);
}