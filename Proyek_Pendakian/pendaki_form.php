<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pendaki Gunung Lawu</title>
    <link rel="stylesheet" href="css/form_style.css">
</head>

<body>
    <header>
        <h1>Pendaftaran Pendaki Gunung Lawu</h1>
    </header>

    <main>
        <section>
            <h2>Form Pendaftaran Pendaki</h2>
            <form action="config/config.php" method="POST">
                <label for="no_ktp">No KTP:</label>
                <input type="text" id="no_ktp" name="no_ktp" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required></textarea>

                <label for="tanggal_pendakian">Tanggal Pendakian:</label>
                <input type="date" id="tanggal_pendakian" name="tanggal_pendakian" required>

                <label for="no_hp">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" required>

                <button type="submit" name="submit">Daftar</button>
            </form>
        </section>

        <section>
            <h2>Daftar Pendaki yang Terdaftar</h2>
            <table>
                <tr>
                    <th>No KTP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Pendakian</th>
                    <th>No HP</th>
                </tr>
                <?php
                // Hubungkan ke database
                include 'config/config.php';

                // Menampilkan data dari database
                if (isset($result) && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['no_ktp']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['alamat']}</td>
                                <td>{$row['tanggal_pendakian']}</td>
                                <td>{$row['no_hp']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Belum ada data pendaki.</td></tr>";
                }
                ?>
            </table>
        </section>
    </main>

    <footer>
        <p>Gunung Lawu 3265 Mdpl</p>
    </footer>
</body>

</html>
