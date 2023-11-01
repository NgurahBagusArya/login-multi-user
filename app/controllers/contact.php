<?php
class contact extends Controller{
    public function index(){
        $data ['judul'] = 'Contact Page';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('contact/index', $data);
        $this->view('templates/footer');
    }
}
?>