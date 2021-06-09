<!DOCTYPE html>
<html>

<head>
    <!-- Menurut Dokumen SDD yang telah diibuat view data digunakan untuk menampilkan data kendaraan 
    pada halaman admin sehingga pengelolaan data bisa terlihat jelas dengan use case ini -->
    <!-- usecasae yang digunakan adalah view data -->
    <!--  Title Page  -->
    <title>VIEW DATA</title>

    <!-- Import file css -->
    <link rel="stylesheet" href="<?php echo base_url('style/thank.css'); ?>">
</head>

<body>
    <div class="container">
        <h1>Terima Kasih</h1>
        <div class="date">
            <!-- Menggunakan script datetime.js untuk menampilkan current time and date -->
            <p id="currentDate">
                <script src="<?php echo base_url('script/datetime.js'); ?>"></script>
            </p>
        </div>
    </div>
</body>

</html>