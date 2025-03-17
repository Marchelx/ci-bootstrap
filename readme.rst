📌 Fundamental CRUD CodeIgniter 3
Proyek ini adalah implementasi CRUD (Create, Read, Update, Delete) menggunakan CodeIgniter 3. Proyek ini membantu memahami dasar-dasar CodeIgniter, termasuk instalasi, koneksi database, dan manipulasi data melalui model, controller, dan view.

🎯 Tujuan Pembelajaran
Setelah mempelajari modul ini, diharapkan siswa dapat:
✅ Menginstalasi CodeIgniter 3 dengan benar.
✅ Menyiapkan proyek CodeIgniter 3 dan mengintegrasikan dengan Bootstrap.
✅ Menampilkan data dari database menggunakan CodeIgniter.
✅ Melakukan input, pengeditan, dan penghapusan data di database menggunakan CodeIgniter.

🚀 Fitur CRUD
✔ Menampilkan data siswa dari database
✔ Menambahkan siswa baru
✔ Mengedit data siswa
✔ Menghapus data siswa

🔧 Instalasi CodeIgniter 3
1️⃣ Persiapan
Pastikan XAMPP atau web server lain sudah terinstal.
Unduh CodeIgniter 3 dari: CodeIgniter Download.
2️⃣ Instalasi & Konfigurasi
Ekstrak CodeIgniter ke dalam htdocs.
Ubah nama folder proyek, misalnya: ci-bootstrap.
Atur Base URL di application/config/config.php:
php
Salin
Edit
$config['base_url'] = 'http://localhost/ci-bootstrap/';
3️⃣ Menghubungkan dengan Database
Buat database di phpMyAdmin dengan nama ci_db.
Atur koneksi database di application/config/database.php:
php
Salin
Edit
$db['default'] = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'ci_db',
    'dbdriver' => 'mysqli'
];
📂 Menampilkan Data dari Database
1️⃣ Membuat Database & Tabel
Buka phpMyAdmin, jalankan SQL berikut:

sql
Salin
Edit
CREATE TABLE siswa (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL,
    no_hp VARCHAR(15) NOT NULL
);
2️⃣ Membuat Model (Siswa_model.php)
php
Salin
Edit
class Siswa_model extends CI_Model {
    public function get_all_siswa() {
        return $this->db->get('siswa')->result();
    }
}
3️⃣ Membuat Controller (Siswa.php)
php
Salin
Edit
class Siswa extends CI_Controller {
    public function index() {
        $this->load->model('Siswa_model');
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $this->load->view('siswa_view', $data);
    }
}
4️⃣ Membuat Tampilan (siswa_view.php)
php
Salin
Edit
<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
    </tr>
    <?php foreach ($siswa as $row) : ?>
    <tr>
        <td><?= $row->nama; ?></td>
        <td><?= $row->alamat; ?></td>
        <td><?= $row->no_hp; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
📝 10 Soal Esai & Jawaban
Berikut adalah 10 pertanyaan esai untuk menguji pemahaman tentang CRUD di CodeIgniter 3.

1️⃣ Jelaskan langkah-langkah instalasi CodeIgniter 3 di komputer lokal menggunakan XAMPP!
✅ Jawaban:

Unduh CodeIgniter 3 dari situs resminya.
Ekstrak file ke dalam folder htdocs di XAMPP.
Atur Base URL di config.php.
Konfigurasi database di database.php.
Jalankan XAMPP, lalu akses di browser:
arduino
Salin
Edit
http://localhost/ci-bootstrap/
2️⃣ Mengapa kita perlu mengatur config.php?
✅ Jawaban:

Untuk mengatur base_url, agar aplikasi berjalan dengan benar.
Mengatur session, keamanan, dan konfigurasi dasar lainnya.
3️⃣ Bagaimana cara menghubungkan CodeIgniter 3 dengan database MySQL?
✅ Jawaban:

Buat database di phpMyAdmin.
Edit application/config/database.php dan atur koneksi database.
4️⃣ Peran file Siswa_model.php dalam aplikasi CodeIgniter?
✅ Jawaban:

Sebagai model yang menangani pengambilan, penambahan, pengeditan, dan penghapusan data siswa di database.
5️⃣ Cara menampilkan data dari database di CodeIgniter?
✅ Jawaban:

Model mengambil data dari database.
Controller mengirim data ke View.
View menampilkan data dalam tabel HTML.
6️⃣ Bagaimana proses input data ke database dilakukan?
✅ Jawaban:

Pengguna mengisi form, lalu mengklik tombol Simpan.
Data dikirim ke Controller, lalu ke Model untuk disimpan ke database.
Setelah berhasil, pengguna diarahkan kembali ke halaman daftar siswa.
7️⃣ Bagaimana cara mengedit data di database menggunakan CodeIgniter?
✅ Jawaban:

Pengguna klik Edit pada data yang ingin diubah.
Form tampil dengan data lama.
Setelah diedit, data dikirim ke Controller, lalu diperbarui di database.
8️⃣ Fungsi dari delete_siswa() dalam Siswa_model.php?
✅ Jawaban:

Fungsi ini digunakan untuk menghapus data siswa berdasarkan ID yang diberikan.
Contoh kode:
php
Salin
Edit
public function delete_siswa($id) {
    return $this->db->where('id', $id)->delete('siswa');
}
9️⃣ Cara menampilkan tombol Edit & Hapus di siswa_view.php dengan Bootstrap?
✅ Jawaban:

Gunakan tombol Bootstrap dalam tabel:
php
Salin
Edit
<td>
    <a href="<?= site_url('siswa/edit/'.$row->id); ?>" class="btn btn-warning">Edit</a>
    <a href="<?= site_url('siswa/hapus/'.$row->id); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
</td>
🔟 Mengapa penting mengintegrasikan Bootstrap dengan CodeIgniter?
✅ Jawaban:

Mempercantik tampilan dan membuatnya responsif.
Membantu membuat antarmuka lebih profesional tanpa banyak menulis kode CSS.
