<!DOCTYPE html>
<html>

<head>
    <!--  Title Page -->
    <title>Thank You</title>

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
        <?php if ($tarif != null) :  ?>
            <h1 id="price"><?php echo "Tarif: Rp.", number_format($tarif, 2, ',', '.')  ?></h1>
        <?php endif  ?>
    </div>
</body>

</html>