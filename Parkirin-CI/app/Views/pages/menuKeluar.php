<!DOCTYPE html>
<html>

<head>
    <!--  Title Page -->
    <title>Parkirin</title>

    <!-- Import file css -->
    <link rel="stylesheet" href="<?php echo base_url('style/menu.css'); ?>">
</head>

<body>
    <h1>Terima Kasih</h1>
    <div class="content">
        <!-- Button untuk melanjutkan ke page masuk pegawai -->
        <a id="btnPegawai" class="buttons" href="<?= base_url('/Pegawai/keluar'); ?>">
            <img src="<?php echo base_url('images/employee.png'); ?>" alt="pegawai">
            <h2>Pegawai</h2>
        </a>
        <!-- Button untuk melanjutkan ke page masuk pengunjung -->
        <a id="btnPengunjung" class="buttons" href="<?= base_url('/Pengunjung/keluar'); ?>">
            <img src="<?php echo base_url('images/id-card.png'); ?>" alt="pengunjung">
            <h2>Pengunjung</h2>
        </a>
    </div>
</body>

</html>