<!-- Form tambah produk -->
<h1>Tambah Produk</h1>

<form method="POST" action="/produk">
    <?php echo csrf_field(); ?>

    <input type="text" name="nama" placeholder="Nama Produk" required>
    <textarea name="deskripsi" placeholder="Deskripsi Produk" required></textarea>

    <button type="submit">Simpan</button>
</form>
<?php /**PATH C:\Users\farid\OneDrive\Documents\Kuliah\Semester 6\ATP\Project\ATP\resources\views/produk/create.blade.php ENDPATH**/ ?>