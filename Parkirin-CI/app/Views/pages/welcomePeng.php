<html>

<head>
    <!--  Title Page -->
    <title>welcome</title>

    <!-- Import file css -->
    <link rel="stylesheet" href="<?php echo base_url('style/welcomePeng.css'); ?>">
</head>

<!-- Page ini ditampilkan setelah pengunjung memasukkan data ketika memasuki tempat parkir -->

<body>
    <h1>Selamat Datang</h1>
    <div class="container">
        <div class="content">
            <!-- Menggunakan script datetime.js untuk menampilkan current time and date -->
            <p id="currentDate">
                <script src="<?php echo base_url('script/datetime.js'); ?>"></script>
            </p>
            <img src="<?php echo base_url('images/id-card.png'); ?>" alt="visitor">
            <h2>Selamat Berkunjung!</h2>
        </div>
    </div>
</body>

</html>