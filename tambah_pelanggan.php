<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Staff</title>
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
            max-width: 500px;
            position: relative;
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
        <a href="user.php" class="close-btn"><i class="bi bi-x-circle"></i></a>
        <h2>Tambah Data Pelanggan</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="number" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kontak:</label>
                <input type="text" name="nama_mahasiswa" class="form-control"
                    pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan"
                    required onkeypress="return onlyLettersAndSpaces(event)">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat:</label>
                <input type="text" name="tempat_lahir" class="form-control"
                    pattern="[A-Za-z\s]+" title="Hanya huruf dan spasi yang diperbolehkan"
                    required onkeypress="return onlyLettersAndSpaces(event)">
            </div>
            <button type="submit" name="submit" class="btn btn-tambah w-100">Tambah Data</button>
        </form>
    </div>
</body>

</html>