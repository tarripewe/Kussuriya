<?php
// Simulasi data tanpa database (dalam bentuk array)
$users = [
    1 => ["nama" => "Tarri Peritha Westi", "username" => "tarripewe", "email" => "tarri@example.com", "role" => "Admin"],
    2 => ["nama" => "Andi Saputra", "username" => "andis", "email" => "andi@example.com", "role" => "Kasir"]
];

// Ambil ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Cek apakah ID ada di array users
if (!isset($users[$id])) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='user.php';</script>";
    exit;
}

// Ambil data sesuai ID
$data = $users[$id];

// Jika tombol update ditekan
if (isset($_POST['update'])) {
    // Ambil data dari form
    $data['nama'] = $_POST['nama'];
    $data['username'] = $_POST['username'];
    $data['email'] = $_POST['email'];
    $data['role'] = $_POST['role'];

    echo "<script>alert('Data berhasil diperbarui!'); window.location='user.php';</script>";
}
?>

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

        h2 {
            color: #3674B5;
            text-align: center;
        }

        .btn-primary {
            background-color: #3674B5;
            border: none;
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
        <h2>Edit Data Staff</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo htmlspecialchars($data['nama']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($data['username']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($data['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Role:</label>
                <select name="role" class="form-control" required>
                    <option value="Admin" <?php echo ($data['role'] == 'Admin') ? 'selected' : ''; ?>>Admin</option>
                    <option value="Kasir" <?php echo ($data['role'] == 'Kasir') ? 'selected' : ''; ?>>Kasir</option>
                    <option value="Staff" <?php echo ($data['role'] == 'Staff') ? 'selected' : ''; ?>>Staff</option>
                </select>
            </div>
            <button type="submit" name="update" class="btn btn-primary w-100">Simpan Perubahan</button>
        </form>
    </div>
</body>

</html>