<!-- Tampilkan daftar produk -->
<h1>Daftar Produk</h1>

<a href="/produk/create">Tambah Produk</a>

<ul>
    <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($produk->nama); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Users\farid\OneDrive\Documents\Kuliah\Semester 6\ATP\Project\ATP\resources\views/produk/index.blade.php ENDPATH**/ ?>