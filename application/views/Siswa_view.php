<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Data Siswa</h2>
    <a href="<?= site_url('siswa/tambah'); ?>" class="btn btn-primary mb-2">Tambah Siswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $row) : ?>
                <tr>
                    <td><?= $row->id; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->alamat; ?></td>
                    <td><?= $row->no_hp; ?></td>
                    <td>
                        <a href="<?= site_url('siswa/edit/'.$row->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('siswa/hapus/'.$row->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
