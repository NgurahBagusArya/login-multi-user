<?php
class Payment extends Controller{
    public function index ()
    {
        $data ['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('payment/index');
        $this->view('templates/admin-footer');
    }
}

?>
