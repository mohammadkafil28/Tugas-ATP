<!-- Tampilkan detail produk -->
<h1>Detail Produk</h1>

<p>Nama: {{ $produk->nama }}</p>
<p>Deskripsi: {{ $produk->deskripsi }}</p>

<a href="/produk/{{ $produk->id }}/edit">Edit</a>
