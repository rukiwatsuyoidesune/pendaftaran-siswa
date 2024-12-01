<?php
include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-pegawai.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pegawai WHERE id=$id";
$query = mysqli_query($db, $sql);
$pegawai = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Pegawai | Sistem Kepegawaian</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        h3 {
            color: #005099;
            font-weight: bold;
        }
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            transition: all 0.3s ease;
            margin-left: 100px;
        }
        form:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        fieldset {
            border: none;
            padding: 0;
        }
        label {
            font-weight: 700;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1em;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input[type="text"]:focus, textarea:focus, select:focus {
            border-color: #005099;
            box-shadow: 0 0 4px rgba(0, 80, 153, 0.3);
            outline: none;
        }
        input[type="submit"] {
            background-color: #005099;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            width: 100%;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #003f7f;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Edit Pegawai</h3>
    </header>

    <form action="proses-edit-pegawai.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $pegawai['id'] ?>" />

            <p>
                <label for="nama">Nama Lengkap: </label>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $pegawai['nama'] ?>" required />
            </p>

            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" placeholder="Alamat lengkap" required><?php echo $pegawai['alamat'] ?></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($pegawai['jenis_kelamin'] == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($pegawai['jenis_kelamin'] == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
            </p>

            <p>
                <label for="email">Email: </label>
                <input type="text" name="email" placeholder="Email" value="<?php echo $pegawai['email'] ?>" required />
            </p>

            <p>
                <label for="jabatan">Jabatan: </label>
                <select name="jabatan" required>
                    <option value="">Pilih Jabatan</option>
                    <option <?php echo ($pegawai['jabatan'] == 'Guru') ? "selected" : "" ?>>Guru</option>
                    <option <?php echo ($pegawai['jabatan'] == 'Staff TU') ? "selected" : "" ?>>Staff TU</option>
                    <option <?php echo ($pegawai['jabatan'] == 'Kepala Sekolah') ? "selected" : "" ?>>Kepala Sekolah</option>
                    <option <?php echo ($pegawai['jabatan'] == 'Wakil Kepala Sekolah') ? "selected" : "" ?>>Wakil Kepala Sekolah</option>
                    <option <?php echo ($pegawai['jabatan'] == 'Petugas Kebersihan') ? "selected" : "" ?>>Petugas Kebersihan</option>
                    <option <?php echo ($pegawai['jabatan'] == 'Penjaga Sekolah') ? "selected" : "" ?>>Penjaga Sekolah</option>

                </select>
            </p>

            <p>
                <label for="telepon">Nomor Telepon: </label>
                <input type="text" name="telepon" placeholder="Nomor Telepon" value="<?php echo $pegawai['telepon'] ?>" required />
            </p>

            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>
    </form>
</body>
</html>
