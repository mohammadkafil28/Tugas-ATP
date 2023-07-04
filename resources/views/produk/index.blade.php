<!-- Tampilkan daftar produk -->
<h1>Daftar Produk</h1>

<a href="/produk/create">Tambah Produk</a>

<ul>
    @foreach($produks as $produk)
        <li>{{ $produk->nama }}</li>
    @endforeach
</ul>
