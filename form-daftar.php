<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran</h3>
    </header>

    <form action="proses-daftar.php" method="POST">
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" required />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            Jenis Kelamin:
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan" required /> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama" required>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
    </form>
</body>
</html>
