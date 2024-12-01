<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Pegawai Baru | Sistem Informasi Kepegawaian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        header {
            text-align: center;
            margin-bottom: 20px
        }
        h3 {
            color: #005099;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin-left: 100px;
        }
        fieldset {
            border: none;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        p {
            margin: 10px 0;
        }
        .radio-group label {
            display: inline-block;
            margin-right: 15px;
        }
        input[type="submit"] {
            background-color: #005099;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Pegawai Baru</h3>
    </header>

    <form action="proses-pendaftaran-pegawai.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama Lengkap:</label>
                <input type="text" name="nama" placeholder="Nama lengkap" required />
            </p>
            <p>
                <label for="alamat">Alamat Lengkap:</label>
                <textarea name="alamat" placeholder="Alamat lengkap" required></textarea>
            </p>
            <p class="radio-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <ul>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </ul>
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email aktif" required />
            </p>
            <p>
                <label for="jabatan">Jabatan Pegawai di Sekolah:</label>
                <select name="jabatan" required>
                    <option value="">Pilih jabatan</option>
                    <option>Guru</option>
                    <option>Staf TU</option>
                    <option>Kepala Sekolah</option>
                    <option>Wakil Kepala Sekolah</option>
                    <option>Petugas Kebersihan</option>
                    <option>Penjaga Sekolah</option>
                </select>
            </p>
            <p>
                <label for="telepon">Nomor Telepon:</label>
                <input type="text" name="telepon" placeholder="Nomor telepon" required />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>
