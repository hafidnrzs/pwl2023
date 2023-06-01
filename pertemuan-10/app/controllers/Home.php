<?php
class Home extends Controller {
    public function index()
    {
        $data['nama'] = "Toko Tanaman Hias";
        $data['title'] = 'Halaman Home';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
?>