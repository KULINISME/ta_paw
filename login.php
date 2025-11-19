<?php
session_start();
require_once 'database.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $data=login($_POST['user'],$_POST['pass']);
    $_SESSION['login']=true;
    $_SESSION['ID_USER']=$data['ID'];
    if($data['ket']==0){
        $_SESSION['isAdmin']=true;
        header("Location:admin/");
        exit();
    }elseif($data['ket']==1){
        $_SESSION['isSiswa']=true;
        header("Location:siswa/");
        exit();
    }else{
        echo "<script>alert('Username atau Password Salah');</script>";
        exit();
    }
}
?>

<div class="login">
	<form action="" method="POST">
			<h1>Login</h1>
            <table>
                <tr>
                    <td><label for="user">Username</label></td>
                </tr>
                <tr>    
                    <td><input type="text" id="user" name="user"></td>
                </tr>
                <tr>
                    <td><label for="pass">Password</label></td>
                </tr>
                <tr>
                    <td><input type="text" id="pass" name="pass"></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="submit">Login</button>
                    </th>
                </tr>
                <tr>
                    <td>
                        <p>Belum Punya Akun? <a href="register.php"> Register    </a></p>
                    </td>
                </tr>
            </table>
	</form>
</div>
