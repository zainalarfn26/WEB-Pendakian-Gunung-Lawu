<?php
include 'config/config.php'; // Koneksi ke database

// Proses Tambah Data
if (isset($_POST['add'])) {
    $no_ktp = $_POST['no_ktp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_pendakian = $_POST['tanggal_pendakian'];
    $no_hp = $_POST['no_hp'];

    $query = "INSERT INTO pendaki (no_ktp, nama, alamat, tanggal_pendakian, no_hp) VALUES ('$no_ktp', '$nama', '$alamat', '$tanggal_pendakian', '$no_hp')";
    $conn->query($query);
}

// Proses Hapus Data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM pendaki WHERE id=$id";
    $conn->query($query);
}

// Proses Update Data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $no_ktp = $_POST['no_ktp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_pendakian = $_POST['tanggal_pendakian'];
    $no_hp = $_POST['no_hp'];

    $query = "UPDATE pendaki SET no_ktp='$no_ktp', nama='$nama', alamat='$alamat', tanggal_pendakian='$tanggal_pendakian', no_hp='$no_hp' WHERE id=$id";
    $conn->query($query);
}

$result = $conn->query("SELECT * FROM pendaki");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pendakian Gunung Lawu</title>
    <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
    <header>
        <h1>Admin - Daftar Pendaki</h1>
    </header>

    <main>
        <section>
            <h2>Tambah Pendaki</h2>
            <form action="admin.php" method="POST">
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

                <button type="submit" name="add">Tambah</button>
            </form>
        </section>

        <section>
            <h2>Daftar Pendaki</h2>
            <table>
                <tr>
                    <th>No KTP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Pendakian</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['no_ktp'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['tanggal_pendakian'] ?></td>
                    <td><?= $row['no_hp'] ?></td>
                    <td>
                        <a href="admin.php?delete=<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                        <a href="admin.php?edit=<?= $row['id'] ?>">Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </section>

        <?php if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $edit_result = $conn->query("SELECT * FROM pendaki WHERE id=$id");
            $edit_row = $edit_result->fetch_assoc();
        ?>
        <section>
            <h2>Edit Pendaki</h2>
            <form action="admin.php" method="POST">
                <input type="hidden" name="id" value="<?= $edit_row['id'] ?>">

                <label for="no_ktp">No KTP:</label>
                <input type="text" id="no_ktp" name="no_ktp" value="<?= $edit_row['no_ktp'] ?>" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?= $edit_row['nama'] ?>" required>

                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required><?= $edit_row['alamat'] ?></textarea>

                <label for="tanggal_pendakian">Tanggal Pendakian:</label>
                <input type="date" id="tanggal_pendakian" name="tanggal_pendakian" value="<?= $edit_row['tanggal_pendakian'] ?>" required>

                <label for="no_hp">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" value="<?= $edit_row['no_hp'] ?>" required>

                <button type="submit" name="update">Update</button>
            </form>
        </section>
        <?php } ?>
    </main>
</body>
</html>
