<!DOCTYPE html>
<html>

<head>
    <!--  Title Page -->
    <title>Pegawai</title>

    <!-- Import file css -->
    <link rel="stylesheet" href="<?php echo base_url('style/pengunjung.css'); ?>">
</head>

<body>
    <h1>Terima Kasih</h1>
    <div class="content">
        <!-- image icon pegawai guna memudahkan identifikasi page keluar bagian pengunjung -->
        <div id="btnPengunjung" class="buttons">
            <img src="<?php echo base_url('images/id-card.png'); ?>" alt="pegawai">
            <h2>Pengunjung</h2>
        </div>
        <!-- Form input data pengunjung ketika akan keluar dari tempat parkir -->
        <form action="<?php echo base_url('/pengunjung/out');  ?>" method="POST" name="formPengunjung">
            <h3>Plat Nomor</h3>
            <input type="text" class="inputText" name="plat_no" id="plat_no">
            <input type="submit" class="inputButton" value="Submit" name="Submit">
        </form>
    </div>
</body>

</html>