<?php

class blog extends Controller{
    public function index()
    {
        $data['judul'] = 'Blog - TravelKuy';
        $data['blog'] = $this->model('Blog_model')->getAlltraveldata();
        $this -> view ('Templates/header' ,$data);
        $this->view('Templates/navbar', $data);
        $this -> view ('blog/index', $data);
        $this -> view ('Templates/footer');
    }
    
    public function readmore($id_blog)
    {
        var_dump($id_blog);
        $data['judul'] = 'Read More';
        $data['blog'] = $this->model('Blog_model')->getblogById($id_blog);
        $this -> view ('Templates/header' ,$data);
        $this->view('Templates/navbar', $data);
        $this -> view ('blog/readmore', $data);
        $this -> view ('Templates/footer');
    }

    
}

?>