<?php
session_start();
// hitung jumlah item dalam keranjang
$jml_item_keranjang = (isset($_SESSION['keranjang'])) ? count($_SESSION['keranjang']) : 0;

echo $jml_item_keranjang;
?>