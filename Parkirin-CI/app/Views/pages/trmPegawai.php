<!DOCTYPE html>
<html>

<head>
    <!--  Title Page -->
    <title>Pegawai</title>

    <!-- Import file css -->
    <link rel="stylesheet" href="<?php echo base_url('style/pegawai.css'); ?>">
</head>

<body>
    <h1>Terima Kasih</h1>
    <div class="content">
        <!-- image icon pegawai guna memudahkan identifikasi page keluar bagian pegawai -->
        <div id="btnPegawai" class="buttons">
            <img src="<?php echo base_url('images/employee.png'); ?>" alt="pegawai">
            <h2>Pegawai</h2>
        </div>
        <!-- Form input data pegawai ketika akan keluar dari tempat parkir -->
        <form action="<?= base_url('Pegawai/out'); ?>" method="Get">
            <h3>ID Pegawai</h3>
            <input type="text" class="inputText" name="id" id="id">
            <input type="submit" class="inputButton" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>