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
                    <input type="text" class="form-control" name="q" placeholder="Cari Kustomer, Kode atau Produk..." value="<?php echo htmlspecialchars($search); ?>">
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
            <h1>Data Penjualan</h1>
            <!-- <button class="tambah-button" onclick="window.location.href='tambah.php'">Tambah Staff</button> -->
        </div>
        <div class="table-container">
            <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kustomer</th>
                        <th>Kode</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Unit</th>
                        <th>Total</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Andi Saputra</td>
                        <td>TRX001</td>
                        <td>Paracetamol 500mg</td>
                        <td>Rp 15.000</td>
                        <td>2</td>
                        <td>Rp 30.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Siti Rahma</td>
                        <td>TRX002</td>
                        <td>Vitamin C 1000mg</td>
                        <td>Rp 25.000</td>
                        <td>1</td>
                        <td>Rp 25.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Budi Santoso</td>
                        <td>TRX003</td>
                        <td>Amoxicillin 500mg</td>
                        <td>Rp 20.000</td>
                        <td>3</td>
                        <td>Rp 60.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Rina Wijaya</td>
                        <td>TRX004</td>
                        <td>Loperamide 2mg</td>
                        <td>Rp 10.000</td>
                        <td>4</td>
                        <td>Rp 40.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Faisal Hidayat</td>
                        <td>TRX005</td>
                        <td>Ibuprofen 400mg</td>
                        <td>Rp 18.000</td>
                        <td>2</td>
                        <td>Rp 36.000</td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</body>

</html>