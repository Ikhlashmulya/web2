<?= $this->extend('layout/template'); ?>

<?= $this->section('isi'); ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nama Produk</th>
            <th scope="col">Id Produk</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($produk as $p) : ?>
            <tr>
                <td><?= $p["nama_barang"]; ?></td>
                <td><?= $p["id_barang"]; ?></td>
                <td><?= $p["stok"]; ?></td>
                <td><?= $p["price"]; ?></td>
                <td><?= $p["status"]; ?></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>

</table>
<?= $this->endSection(); ?>