<?php
class about extends Controller{
    public function index($nama = 'Namamu', $pekerjaan = 'Pekerjaanmu'){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Index';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data ['judul'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
?>