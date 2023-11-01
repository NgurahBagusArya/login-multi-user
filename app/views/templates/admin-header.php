<?php

session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['level'] !== 'admin') {
    // Jika sesi user_id tidak ada atau level bukan admin, arahkan kembali ke halaman login
    header('Location: ' . BASEURL . '/login');
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/jsdelivr.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css">


</head>
  <body>
