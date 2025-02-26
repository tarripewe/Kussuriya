<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Staff</title>
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
                    <input type="text" class="form-control" name="q" placeholder="Cari Kode, Supplier atau Produk..." value="<?php echo htmlspecialchars($search); ?>">
                    <?php if ($search != ""): ?>
                        <button type="button" class="tambah-button" onclick="window.location.href='mahasiswa.php'">Reset</button>
                    <?php else: ?>
                        <button type="submit" class="tambah-button">Cari</button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
        <!-- Header dengan judul di kiri dan tombol add di kanan -->
        <div class="table-header">
            <h1>Data Pembelian Obat</h1>
            <!-- <button class="tambah-button" onclick="window.location.href='tambah.php'">Tambah Staff</button> -->
        </div>
        <div class="table-container">
            <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Kode</th>
                        <th>Supplier</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Unit</th>
                        <th>Total</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>21-02-2025</td>
                        <td>PB001</td>
                        <td>PT. Farma Sehat</td>
                        <td>Paracetamol</td>
                        <td>Rp 5.000</td>
                        <td>200</td>
                        <td>Rp 1.000.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>20-02-2025</td>
                        <td>PB002</td>
                        <td>CV. Medika Jaya</td>
                        <td>Amoxicillin</td>
                        <td>Rp 10.000</td>
                        <td>150</td>
                        <td>Rp 1.500.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>19-02-2025</td>
                        <td>PB003</td>
                        <td>PT. Apotek Nusantara</td>
                        <td>Vitamin C</td>
                        <td>Rp 3.500</td>
                        <td>300</td>
                        <td>Rp 1.050.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>18-02-2025</td>
                        <td>PB004</td>
                        <td>CV. Sehat Selalu</td>
                        <td>Ibuprofen</td>
                        <td>Rp 7.500</td>
                        <td>100</td>
                        <td>Rp 750.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>17-02-2025</td>
                        <td>PB005</td>
                        <td>PT. Medis Mandiri</td>
                        <td>Antibiotik</td>
                        <td>Rp 12.000</td>
                        <td>120</td>
                        <td>Rp 1.440.000</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>