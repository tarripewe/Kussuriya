<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sertakan Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }

        .main-content {
            margin-left: 270px;
            padding: 40px;
            width: calc(100% - 270px);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .search-container {
            position: absolute;
            top: 20px;
            right: 20px;
            max-width: 400px;
            width: 100%;
        }

        .table-header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            margin-top: 60px;
            /* memberi ruang dari search */
        }

        .table-header h2 {
            margin: 0;
            color: #3674B5;
        }

        .tambah-button {
            padding: 12px 24px;
            background-color: #3674B5;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .tambah-button:hover {
            background-color: #3674B5;
        }

        .table-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border: 2px solid #3674B5;
            text-align: center;
        }

        th,
        td {
            border: 2px solid #3674B5;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #3674B5;
            color: white;
        }

        a.sort-link {
            color: white;
            text-decoration: none;
        }

        a.sort-link:hover {
            text-decoration: underline;
        }

        .edit-button,
        .hapus-button {
            padding: 8px 15px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 80px;
        }

        .edit-button {
            background-color: #3D8D7A;
            color: white;
            margin-right: 5px;
        }

        .hapus-button {
            background-color: #FF5677;
            color: white;
        }

        .edit-button:hover {
            background-color: #5a7d4e;
        }

        .hapus-button:hover {
            background-color: #a71d2a;
        }

        .pagination {
            margin-top: 20px;
        }

        .pagination .page-link {
            color: #3674B5;
            border: 1px solid #3674B5;
        }

        .pagination .page-item.active .page-link {
            background-color: #3674B5;
            border-color: #3674B5;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include("sidebar.php"); ?>
    <div class="main-content">
        <!-- Search Container di pojok kanan atas -->
        <div class="search-container">
            <form class="search-form" method="GET" action="user.php">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" placeholder="Cari Nama atau Supplier..." value="<?php echo htmlspecialchars($search); ?>">
                    <?php if ($search != ""): ?>
                        <button type="button" class="tambah-button" onclick="window.location.href='tambah_obat.php'">Reset</button>
                    <?php else: ?>
                        <button type="submit" class="tambah-button">Cari</button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
        <!-- Header dengan judul di kiri dan tombol add di kanan -->
        <div class="table-header">
            <h1>Data Supplier</h1>
            <button class="tambah-button" onclick="window.location.href='tambah_supplier.php'">Tambah Supplier</button>
        </div>

        <body>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Supplier</th>
                            <th>Kontak</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Andi Saputra</td>
                            <td>Kimia Farma</td>
                            <td>081234567890</td>
                            <td>Jl. Merdeka No. 10, Jakarta</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=1'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Siti Rahma</td>
                            <td>Bio Farma</td>
                            <td>081298765432</td>
                            <td>Jl. Sudirman No. 25, Bandung</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=2'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>Sanbe Farma</td>
                            <td>081376543210</td>
                            <td>Jl. Ahmad Yani No. 15, Surabaya</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=3'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rina Wijaya</td>
                            <td>Dexa Medica</td>
                            <td>082134567890</td>
                            <td>Jl. Diponegoro No. 5, Yogyakarta</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=4'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Faisal Hidayat</td>
                            <td>Novell Pharmaceutical</td>
                            <td>082198765432</td>
                            <td>Jl. Gatot Subroto No. 8, Semarang</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=5'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Nurul Aini</td>
                            <td>Kalbe Farma</td>
                            <td>081356789012</td>
                            <td>Jl. Hasanuddin No. 14, Medan</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=6'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Adi Pratama</td>
                            <td>Guardian Pharma</td>
                            <td>081267890123</td>
                            <td>Jl. Pahlawan No. 20, Makassar</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=7'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Lina Sari</td>
                            <td>Meiji Seika</td>
                            <td>082345678901</td>
                            <td>Jl. Malioboro No. 30, Yogyakarta</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=8'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Rizky Maulana</td>
                            <td>Pharos Indonesia</td>
                            <td>081478902345</td>
                            <td>Jl. Asia Afrika No. 50, Bandung</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=9'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Fatimah Zahra</td>
                            <td>Bayer Indonesia</td>
                            <td>081589012345</td>
                            <td>Jl. Veteran No. 75, Surabaya</td>
                            <td>
                                <button class='edit-button' onclick="window.location.href='edit_obat.php?id=10'">Edit</button>
                                <button class='hapus-button'>Hapus</button>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
    </div>
</body>

</html>