<div class="container mt-3">
    <form action="<?= BASEURL; ?>/produk/insProduk" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="l2" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="l2" name="tnama" placeholder="Nama barang" required>
        </div>
        <div class="mb-3">
            <label for="l3" class="form-label">Harga</label>
            <input type="text" class="form-control" id="l3" name="thrg" placeholder="Harga" required>
        </div>
        <div class="mb-3">
            <label for="l4" class="form-label">Jumlah Stok</label>
            <input type="text" class="form-control" id="l4" name="tjml" placeholder="Stok" required>
        </div>
        <div class="mb-3">
            <label for="l5" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="l5" name="tket" placeholder="Keterangan">
        </div>
        <div class="mb-3">
            <label for="l6" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="l6" name="foto" required>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Tambah</button>
            <a href="<?= BASEURL; ?>/produk" class="btn btn-primary">Kembali</a>
        </div>
    </form>
</div>