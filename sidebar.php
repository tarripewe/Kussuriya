<!DOCTYPE html>
<html lang="id">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .sidebar {
            width: 250px;
            background-color: #3674B5;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
        }

        .sidebar h3 {
            text-align: left;
            margin-bottom: 30px;
            padding-left: 10px;
        }

        .sidebar h4 {
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            margin: 5px 0;
            border-radius: 5px;
            text-align: left;
        }

        .sidebar a.active {
            background-color: #578FCA;
            font-weight: bold;
        }

        .sidebar a:hover {
            background-color: #578FCA;
        }

        .submenu {
            padding-left: 30px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3><i class="bi bi-capsule-pill"></i> KUSSURIYA</h3>
        <h4>Hello, Tarri!</h4>
        <a href="penjualan.php" class="<?= basename($_SERVER['PHP_SELF']) == 'penjualan.php' ? 'active' : '' ?>">
            <i class="bi bi-cart-fill"></i> Penjualan
        </a>
        <a href="pembelian.php" class="<?= basename($_SERVER['PHP_SELF']) == 'pembelian.php' ? 'active' : '' ?>">
            <i class="bi bi-bag-fill"></i> Pembelian
        </a>
        <a href="supplier.php" class="<?= basename($_SERVER['PHP_SELF']) == 'supplier.php' ? 'active' : '' ?>">
            <i class="bi bi-truck"></i> Supplier
        </a>
        <a href="pelanggan.php" class="<?= basename($_SERVER['PHP_SELF']) == 'pelanggan.php' ? 'active' : '' ?>">
            <i class="bi bi-person-badge"></i> Pelanggan
        </a>
        <a href="user.php" class="<?= basename($_SERVER['PHP_SELF']) == 'user.php' ? 'active' : '' ?>">
            <i class="bi bi-people-fill"></i> Users
        </a>
        <a href="obat.php" class="<?= basename($_SERVER['PHP_SELF']) == 'obat.php' ? 'active' : '' ?>">
            <i class="bi bi-capsule"></i> Obat
        </a>

        <a href="logout.php">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>
</body>

</html>