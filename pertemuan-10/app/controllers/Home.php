<?php
class Home extends Controller {
    public function index()
    {
        session_start();
        // $data['nama'] = $this->model('User_model')->getUser();
        $data['nama'] = "Toko Tanaman Hias";
        $data['title'] = "Halaman Home";

        if (isset($_SESSION["iduser"])) {
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        }
    }
}
?>