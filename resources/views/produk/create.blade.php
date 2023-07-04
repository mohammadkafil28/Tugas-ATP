<!-- Form tambah produk -->
<h1>Tambah Produk</h1>

<form method="POST" action="/produk">
    @csrf

    <input type="text" name="nama" placeholder="Nama Produk" required>
    <textarea name="deskripsi" placeholder="Deskripsi Produk" required></textarea>

    <button type="submit">Simpan</button>
</form>
