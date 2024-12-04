<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Teknik-Computer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #005099;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        h3, h1 {
            margin: 5px;
        }
        h4 {
            color: #005099;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 10px 0;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #005099;
            font-weight: bold;
            padding: 10px 15px;
            border: 2px solid #005099;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        nav ul li a:hover {
            background-color: #005099;
            color: white;
        }
        p {
            text-align: center;
            font-size: 1.1em;
            margin-top: 20px;
            color: #555;
        }
        .success {
            color: green;
        }
        .failure {
            color: red;
        }
    </style>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Teknik-Computer</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar (Siswa)</a></li>
            <li><a href="list-pegawai.php">Pendaftar (Pegawai)</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
        <p class="<?php echo $_GET['status'] == 'sukses' ? 'success' : 'failure'; ?>">
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
</body>
</html>
