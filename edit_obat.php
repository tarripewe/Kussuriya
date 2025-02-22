<?php
$barang = [
    1 => [
        "id" => 1,
        "kode" => "TB001",
        "nama" => "Paracetamol",
        "jenis" => "Tablet",
        "kategori" => "Obat Bebas",
        "stok" => 100,
        "harga_beli" => 3000,
        "harga_jual" => 5000,
        "expired_date" => "2026-12-31",
        "supplier" => "PT. Kimia Farma"
    ],
    2 => [
        "id" => 2,
        "kode" => "KP001",
        "nama" => "Amoxicillin",
        "jenis" => "Kapsul",
        "kategori" => "Antibiotik",
        "stok" => 75,
        "harga_beli" => 12000,
        "harga_jual" => 15000,
        "expired_date" => "2025-11-20",
        "supplier" => "PT. Sanbe Farma"
    ],
    3 => [
        "id" => 3,
        "kode" => "TB002",
        "nama" => "Vitamin C 500mg",
        "jenis" => "Tablet",
        "kategori" => "Suplemen",
        "stok" => 200,
        "harga_beli" => 7000,
        "harga_jual" => 10000,
        "expired_date" => "2027-03-15",
        "supplier" => "PT. Konimex"
    ],
    4 => [
        "id" => 4,
        "kode" => "CR001",
        "nama" => "Betadine",
        "jenis" => "Cair",
        "kategori" => "Antiseptik",
        "stok" => 50,
        "harga_beli" => 15000,
        "harga_jual" => 20000,
        "expired_date" => "2026-08-10",
        "supplier" => "PT. Kalbe Farma"
    ],
    5 => [
        "id" => 5,
        "kode" => "SP001",
        "nama" => "Salep Kortikosteroid",
        "jenis" => "Salep",
        "kategori" => "Obat Kulit",
        "stok" => 60,
        "harga_beli" => 14000,
        "harga_jual" => 18000,
        "expired_date" => "2025-09-05",
        "supplier" => "PT. Hexpharm Jaya"
    ],

];

// Ambil ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Cek apakah ID ada di array users
if (!isset($users[$id])) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='obat.php';</script>";
    exit;
}

// Ambil data sesuai ID
$data = $users[$id];

// Jika tombol update ditekan
if (isset($_POST['update'])) {
    // Ambil data dari form
    $data['kode'] = $_POST['kode'];
    $data['nama'] = $_POST['nama'];
    $data['jenis'] = $_POST['jenis'];
    $data['kategori'] = $_POST['kategori'];
    $data['email'] = $_POST['email'];
    $data['role'] = $_POST['role'];

    echo "<script>alert('Data berhasil diperbarui!'); window.location='obat.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sertakan jQuery untuk AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            position: relative;
            margin-top: 50px;
        }

        .btn-tambah {
            background-color: #3674B5;
            color: white;
            border: none;
        }

        .btn-tambah:hover {
            background-color: #3674B5;
            color: white;
        }

        h2 {
            color: #3674B5;
            text-align: center;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 20px;
            color: #3674B5;
            cursor: pointer;
            text-decoration: none;
        }

        .close-btn:hover {
            color: #3674B5;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="obat.php" class="close-btn"><i class="bi bi-x-circle"></i></a>
        <h2>Edit Data Obat</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Kode:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['kode']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['nama']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis:</label>
                <select name="fakultas" class="form-control" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Tablet" <?php echo ($data['jenis'] == 'Tablet') ? 'selected' : ''; ?>>Tablet</option>
                    <option value="Sirup" <?php echo ($data['jenis'] == 'Sirup') ? 'selected' : ''; ?>>Sirup</option>
                    <option value="Salep" <?php echo ($data['jenis'] == 'Salep') ? 'selected' : ''; ?>>Salep</option>
                    <option value="Injeksi" <?php echo ($data['jenis'] == 'Injeksi') ? 'selected' : ''; ?>>Injeksi</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori:</label>
                <select name="fakultas" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Antibiotik" <?php echo ($data['kategori'] == 'Antibiotik') ? 'selected' : ''; ?>>Antibiotik</option>
                    <option value="Analgesik" <?php echo ($data['kategori'] == 'Analgesik') ? 'selected' : ''; ?>>Analgesik</option>
                    <option value="Antihistamin" <?php echo ($data['kategori'] == 'Antihistamin') ? 'selected' : ''; ?>>Antihistamin</option>
                    <option value="Antihipertensi" <?php echo ($data['kategori'] == 'Antihipertensi') ? 'selected' : ''; ?>>Antihipertensi</option>
                    <option value="Other" <?php echo ($data['kategori'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['stok']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Beli:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['harga_beli']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Jual:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['harga_jual']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Expired Date:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['expired_date']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Supplier:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['supplier']); ?>" required>
            </div>

            <button type="submit" name="submit" class="btn btn-tambah w-100">Tambah Data</button>
        </form>
    </div>
</body>

</html>