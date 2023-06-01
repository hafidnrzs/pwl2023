<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1>Form Edit barang</h1>
            <form action="<?= BASEURL; ?>/produk/updProduk" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="l1" class="form-label">ID</label>
                    <input type="text" class="form-control" id="l1" name="tid" value="<?= $data['produk']['id']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="l2" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="l2" name="tnama" value="<?= $data['produk']['nama']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="l3" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="l3" name="thrg" value="<?= $data['produk']['hrg']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="l4" class="form-label">Jumlah Stok</label>
                    <input type="text" class="form-control" id="l4" name="tjml" value="<?= $data['produk']['jml']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="l5" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="l5" name="tket" value="<?= $data['produk']['keterangan']; ?>">
                </div>
                <div class="mb-3">
                    <label for="l6" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="l6" name="foto">
                    <input type="hidden" name="foto_lama" value="<?= $data['produk']['foto']; ?>">
                    <img src="<?= BASEURL; ?>/img/daun/<?php echo $data['produk']['foto']; ?>" width="150px" height="120px">
                    <input type="checkbox" name="ubah_foto" value="true">Ceklist jika ingin mengubah foto<br>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="<?= BASEURL; ?>/produk" class="btn btn-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>