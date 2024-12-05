<?php
include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Teknik-Computer</title>
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
            margin-right: 100px;
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
        textarea {
            resize: vertical;
        }
        .radio-group {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }
        .radio-group label {
            font-weight: normal;
            display: inline-flex;
            align-items: center;
        }
        input[type="radio"] {
            margin-right: 8px;
        }
        select {
            appearance: none;
            background-color: #fff;
            color: #333;
            padding-right: 25px;
            position: relative;
        }
        select::after {
            content: '\25BC';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.9em;
            color: #333;
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
        input[type="submit"]:active {
            background-color: #003060;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" required />
            </p>

            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" placeholder="Alamat lengkap" required><?php echo $siswa['alamat'] ?></textarea>
            </p>

            <p>
                <?php echo "<td><img src='images/".$siswa['foto']."' width='100' height='100'></td>"; ?>
                <br>
                <label for="foto">Foto:</label>
                <input type="file" name="foto">
            </p>

            <div class="radio-group">
                <label>Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($siswa['jenis_kelamin'] == 'Laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($siswa['jenis_kelamin'] == 'Perempuan') ? "checked" : "" ?>> Perempuan</label>
            </div>

            <p>
                <label for="agama">Agama: </label>
                <select name="agama" required>
                    <option value="">Pilih Agama</option>
                    <option <?php echo ($siswa['agama'] == 'Islam') ? "selected" : "" ?>>Islam</option>
                    <option <?php echo ($siswa['agama'] == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                    <option <?php echo ($siswa['agama'] == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                    <option <?php echo ($siswa['agama'] == 'Budha') ? "selected" : "" ?>>Budha</option>
                    <option <?php echo ($siswa['agama'] == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                </select>
            </p>

            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" required />
            </p>

            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>
    </form>
</body>
</html>
