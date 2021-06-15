<!DOCTYPE html>
<html>

<head>
    <title>Parkirin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style/menu.css"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengunjung</a>
                    </li>
                </ul>
                <form class="d-flex" action=<?= base_url("Home/index"); ?> method="POST">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div>
        <form class="d-flex" action=<?= base_url("Admin/changeCat"); ?> method="POST">
            <select name="tp" id="tp">
                <option value="1">Pegawai</option>
                <option value="0">Pengunjung</option>
            </select>
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    <div class="content">
        <?php if ($data["tipe"] = "1") : ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id Pegawai</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Tanggal Keluar</th>
                        <th scope="col">Jam Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Pegawai as $pg) : ?>
                        <tr>
                            <th scope="row"><?= $pg['id_pegawai']; ?></th>
                            <td><?= $pg['tanggal_masuk']; ?></td>
                            <td><?= $pg['jam_masuk']; ?></td>
                            <td><?= $pg['tanggal_keluar']; ?></td>
                            <td><?= $pg['jam_keluar']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </thead>
            </table>
        <?php elseif ($data["tipe"] = "0") : ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id Tiket</th>
                        <th scope="col">Tipe Kendaraan</th>
                        <th scope="col">Plat Nomor</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Tanggal Keluar</th>
                        <th scope="col">Jam Keluar</th>
                        <th scope="col">Tarif</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Pengunjung as $png) : ?>
                        <tr>
                            <th scope="row"><?= $png['id_tiket']; ?></th>
                            <td><?= $png['platNomor']; ?></td>
                            <td><?= $png['tanggal_masuk']; ?></td>
                            <td><?= $png['jam_masuk']; ?></td>
                            <td><?= $png['tanggal_keluar']; ?></td>
                            <td><?= $png['jam_keluar']; ?></td>
                            <td><?= $png['tarif_parkir']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </thead>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>