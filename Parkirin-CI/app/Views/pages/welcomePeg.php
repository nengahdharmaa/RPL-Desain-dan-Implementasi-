<!DOCTYPE html>
<html>

<head>
    <!--  Title Page -->
    <title>welcome</title>

    <!-- Import file css -->
    <link rel="stylesheet" href="<?php echo base_url('style/welcomePeg.css'); ?>">
</head>

<!-- Page ini ditampilkan setelah pegawai memasukkan data ketika memasuki tempat parkir -->

<body>
    <h1>Selamat Datang</h1>
    <div class="container">
        <div class="content">
            <!-- Menggunakan script datetime.js untuk menampilkan current time and date -->
            <p id="currentDate">
                <script src="<?php echo base_url('script/datetime.js'); ?>"></script>
            </p>
            <img src="<?php echo base_url('employee.png'); ?>" alt="employee">
            <h2>nama pegawai</h2>
        </div>
    </div>
</body>

</html>