<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai | Sistem Informasi Kepegawaian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        header {
            background-color: #005099;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        h3 {
            margin: 0;
        }
        nav {
            text-align: center;
            margin-bottom: 20px;
        }
        nav a {
            text-decoration: none;
            color: #005099;
            font-weight: bold;
            padding: 10px 15px;
            border: 2px solid #005099;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        nav a:hover {
            background-color: #005099;
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-bottom: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #005099;
            color: white;
            text-align: center;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        td a {
            color: #005099;
            text-decoration: none;
            font-weight: bold;
        }
        td a:hover {
            text-decoration: underline;
        }
        p {
            text-align: center;
            font-size: 1.1em;
            color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h3>Daftar Pegawai</h3>
    </header>

    <nav>
        <a href="form-daftar-pegawai.php">[+] Tambah Baru</a>
    </nav>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Nomor Telepon</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pegawai";
            $query = mysqli_query($db, $sql);

            while($pegawai = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$pegawai['id']."</td>";
                echo "<td>".$pegawai['nama']."</td>";
                echo "<td>".$pegawai['alamat']."</td>";
                echo "<td>".$pegawai['jenis_kelamin']."</td>";
                echo "<td>".$pegawai['email']."</td>";
                echo "<td>".$pegawai['jabatan']."</td>";
                echo "<td>".$pegawai['telepon']."</td>";
                echo "<td>";
                echo "<a href='form-edit-pegawai.php?id=".$pegawai['id']."'>Edit</a> | ";
                echo "<a href='hapus-pegawai.php?id=".$pegawai['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?> pegawai</p>
</body>
</html>
