<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat</title>
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
        <h2>Tambah Data Obat</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Kode:</label>
                <input type="number" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text" name="nama_mahasiswa" class="form-control"
                    pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan"
                    required onkeypress="return onlyLettersAndSpaces(event)">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis:</label>
                <select name="fakultas" class="form-control" required>
                    <option value="">-- Pilih Jenis --</option>
                   <option>Tablet</option>
                   <option>Sirup</option>
                   <option>Salep</option>
                   <option>Injeksi</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori:</label>
                <select name="fakultas" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                   <option>Antibiotik</option>
                   <option>Analgesik</option>
                   <option>Antihistamin</option>
                   <option>Antihipertensi</option>
                   <option>Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok:</label>
                <input type="text" name="tempat_lahir" class="form-control"
                    pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan"
                    required onkeypress="return onlyLettersAndSpaces(event)">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Beli:</label>
                <input type="text" name="tempat_lahir" class="form-control"
                    pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan"
                    required onkeypress="return onlyLettersAndSpaces(event)">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Jual:</label>
                <input type="text" name="tempat_lahir" class="form-control"
                    pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan"
                    required onkeypress="return onlyLettersAndSpaces(event)">
            </div>
            <div class="mb-3">
                <label class="form-label">Expired Date:</label>
                <input type="date" name="tempat_lahir" class="form-control"
                    pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan"
                    required onkeypress="return onlyLettersAndSpaces(event)">
            </div>
            <div class="mb-3">
                <label class="form-label">Supplier:</label>
                <input type="text" name="tempat_lahir" class="form-control"
                    pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan"
                    required onkeypress="return onlyLettersAndSpaces(event)">
            </div>
        
            <button type="submit" name="submit" class="btn btn-tambah w-100">Tambah Data</button>
        </form>
    </div>
</body>

</html>