<?php
include "koneksi.php";
session_start();
date_default_timezone_set('Asia/Jakarta');
$current_date = new DateTime();
$formatted_time = $current_date->format('Y-m-d H:i:s');
$query_checkout = mysqli_query($conn, "update transaksi set status_pembayaran = 'sudah dibayar', tgl_pembayaran = '" . $formatted_time . "' where id_transaksi = " . $_GET['id_transaksi'] . "");
echo "<script>alert('Checkout Successfuly');location.href='history.php';</script>";
?>