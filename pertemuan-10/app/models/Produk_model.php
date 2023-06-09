<?php
class Produk_model {
    private $table = "barang";
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function uploadFoto($ft)
    {
        $namaFile = $ft['name'];
        $namaSementara = $ft['tmp_name'];
        // Tentukan lokasi file yang akan dipindahkan
        $dirUpload = "img/daun/";
        // Pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        if ($terupload) {
            return true;
        } else {
            return false;
        }
    }

    public function add($data, $ff)
    {
        $hasil = $this->uploadFoto($ff);
        if ($hasil) {
            $foto = $ff['name'];
            $nama = $data['tnama'];
            $hrg = $data['thrg'];
            $jml = $data['tjml'];
            $keterangan = $data['tket'];
            $this->db->query('SELECT IF(MAX(id) IS NULL, 1, MAX(id) + 1) AS maks_id FROM ' . $this->table);
            $data = $this->db->resultSet();
            foreach ($data as $rec) {
                $id = $rec["maks_id"];
            }
            $this->db->query('INSERT INTO ' . $this->table . ' (id, nama, hrg, jml, keterangan, foto) VALUES (:id, :nama, :hrg, :jml, :keterangan, :foto)');
            $this->db->bind('id', $id);
            $this->db->bind('nama', $nama);
            $this->db->bind('hrg', $hrg);
            $this->db->bind('jml', $jml);
            $this->db->bind('keterangan', $keterangan);
            $this->db->bind('foto', $foto);
            $res = $this->db->execute();
            return true;
        } else {
            return false;
        }
    }

    public function edit($data, $ff)
    {
        $id = $data["tid"];
        $nama = $data["tnama"];
        $hrg = $data['thrg'];
        $jml = $data['tjml'];
        $keterangan = $data['tket'];
        $foto_lama = $data['foto_lama'];
        if (isset($data['ubah_foto'])) {
            if ($this->uploadFoto($ff)) {
                $foto = $ff['name'];
                $sql = "UPDATE " . $this->table . " SET nama='$nama', jml='$jml', hrg='$hrg', keterangan='$keterangan', foto='$foto' WHERE id='$id'";
                $this->db->query($sql);
                $this->db->execute();
                unlink ("img/daun/" . $foto_lama);
            }
        } else {
            $sql = "UPDATE " . $this->table . " SET nama='$nama', jml='$jml', hrg='$hrg', keterangan='$keterangan' WHERE id='$id'";
            $this->db->query($sql);
            $this->db->execute();
        }
    }

    public function del($id)
    {
        $data['produk'] = $this->getProductById($id);
        $foto = $data['produk']['foto'];
        $sql = "DELETE FROM " . $this->table . " WHERE id='$id'";
        $hasil = $this->db->query($sql);
        $this->db->execute();
        if ($foto != "") {
            unlink("img/daun/" . $foto);
        }
    }
}
?>