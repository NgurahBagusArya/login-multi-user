<?php 
class ticket extends Controller{
    public function index()
    { 
            $data['judul'] = 'Ticket - TravelKuy';
            $this->view('Templates/header', $data);
            $this->view('Templates/navbar', $data);
            $this->view('ticket/index', $data);
            $this->view('Templates/footer');

    }
}