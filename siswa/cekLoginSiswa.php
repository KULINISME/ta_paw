<?php
session_start();
if(!isset($_SESSION['isSiswa'])){
  header('Location: ../login.php');
  exit();
}