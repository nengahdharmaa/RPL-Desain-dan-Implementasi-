<!DOCTYPE html>
<html>

<head>
    <!--  Title Page -->
    <title>Parkirin</title>

    <!-- Import file css -->
    <link rel="stylesheet" href="<?php echo base_url('style/menu.css'); ?>">
</head>

<body>
    <h1>Menu Demo</h1>
    <div class="content">
        <!-- Button untuk melanjutkan ke page masuk pegawai -->
        <a id="btnPegawai" class="buttons" href="<?= base_url('/Home/menuMasuk'); ?>">
            <img src="<?php echo base_url('images/in.png'); ?>" alt="pegawai">
            <h2>Skenario Masuk Parkir</h2>
        </a>
        <!-- Button untuk melanjutkan ke page masuk pengunjung -->
        <a id="btnPengunjung" class="buttons" href="<?= base_url('/Home/menuKeluar'); ?>">
            <img src="<?php echo base_url('images/out.png'); ?>" alt="pengunjung">
            <h2>Skenario Keluar Parkir</h2>
        </a>
        <!-- Button untuk melanjutkan ke page masuk pengunjung -->
        <a id="btnPengunjung" class="buttons" href="<?= base_url('/Admin/index'); ?>">
            <img src="<?php echo base_url('images/admin.png'); ?>" alt="pengunjung">
            <h2>Skenario Menu Admin</h2>
        </a>
    </div>
</body>

</html>