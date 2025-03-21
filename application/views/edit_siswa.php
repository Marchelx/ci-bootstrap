<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2><?= isset($siswa) ? 'Edit Siswa' : 'Tambah Siswa' ?></h2>
    <form method="post" action="<?= isset($siswa) ? site_url('siswa/update/'.$siswa->id) : site_url('siswa/simpan'); ?>">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= isset($siswa) ? $siswa->nama : ''; ?>" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?= isset($siswa) ? $siswa->alamat : ''; ?></textarea>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="<?= isset($siswa) ? $siswa->no_hp : ''; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
</body>
</html>
