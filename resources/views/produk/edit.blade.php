<!-- Form edit produk -->
<h1>Edit Produk</h1>

<form method="POST" action="/produk/{{ $produk->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="nama" placeholder="Nama Produk" value="{{ $produk->nama }}" required>
    <textarea name="deskripsi" placeholder="Deskripsi Produk" required>{{ $produk->deskripsi }}</textarea>

    <button type="submit">Simpan</button>
</form>
