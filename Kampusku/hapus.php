<?php
include('../config/config.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM tb_mahasiswa WHERE id='$id'");
header('Location: index2.php?page=data-mahasiswa');
?>