<?php 
class admin extends Controller{
    public function index()
    { 
            $data['judul'] = 'Dashboard - Admin';
            $data['trip'] = $this->model('Trip_model')->getAlltripdata();
            $this->view('Templates/admin-header', $data);
            $this->view('Templates/admin-navbar', $data);
            $this->view('admin/index', $data);
            $this->view('Templates/admin-footer');

    }

    public function user() {
        $data['judul'] = 'User - Admin';
        $data['users'] = $this->model('users_model')->getAllUsers();
        $this->view('Templates/admin-header', $data);
        $this->view('Templates/admin-navbar', $data);
        $this->view('admin/user', $data);
        $this->view('Templates/admin-footer');
}

    public function blog() {
            $data['judul'] = 'Blog - Admin';
            $data['blog'] = $this->model('Admin_model')->getAlltraveldata();
            $this->view('Templates/admin-header', $data);
            $this->view('Templates/admin-navbar', $data);
            $this->view('admin/blog', $data);
            $this->view('Templates/admin-footer');
    }

    public function readmore($id_blog)
    {
        var_dump($id_blog);
        $data['judul'] = 'Read More';
        $data['blog'] = $this->model('Blog_model')->getblogById($id_blog);
        $this -> view ('Templates/header' ,$data);
        $this -> view ('blog/readmore', $data);
        $this -> view ('Templates/footer');
    }

    //Main Function (Buy Ticket)
    public function addTicket()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama_trip = $_POST['nama_trip'];
            $deskripsi = $_POST['deskripsi'];
            $tujuan = $_POST['tujuan'];
            $start = $_POST['start_date'];
            $end = $_POST['end_date'];
            $harga = $_POST['harga'];
            $slot = $_POST['slot_ticket'];
    
            $image_name = $_FILES["image"]["name"];
            $tmp_image = $_FILES["image"]["tmp_name"];
            $target_directory = $_SERVER['DOCUMENT_ROOT'] . '/travel/public/img/ticket/';
            $target_file = $target_directory . $image_name;
            
            // Pastikan direktori tujuan ada
            if (!file_exists($target_directory)) {
                mkdir($target_directory, 0777, true);
            }
    
            // Periksa tipe file (hanya menerima gambar)
            $allowed_types = ['image/jpeg', 'image/jpg', 'image/png'];
            $image_type = $_FILES['image']['type'];
            if (!in_array($image_type, $allowed_types)) {
                echo 'Tipe file yang diunggah tidak valid.';
                return;
            }
    
            // Periksa ukuran file (batasi ukuran gambar)
            $max_size = 2 * 1024 * 1024; // 2 MB
            $image_size = $_FILES['image']['size'];
            if ($image_size > $max_size) {
                echo 'Ukuran file terlalu besar. Maksimal 2MB diizinkan.';
                return;
            }
    
            if (move_uploaded_file($tmp_image, $target_file)) {
                // Lokasi tempat menyimpan file gambar yang diunggah
                $lokasi_simpan = '/travel/public/img/ticket/' . $image_name;
    
                $data = [
                    'nama_trip' => $nama_trip,
                    'deskripsi' => $deskripsi,
                    'tujuan' => $tujuan,
                    'image' => $lokasi_simpan, // Simpan lokasi file gambar yang diunggah
                    'start_date' => $start,
                    'end_date' => $end,
                    'harga' => $harga,
                    'slot_tiket' => $slot
                ];
    
                if ($this->model('admin_model')->tambahkanticket($data) > 0) {
                    header('Location: ' . BASEURL . '/admin/index');
                    exit;
                }
            } else {
                echo 'Gagal mengunggah file.';
            }
        }
    }
    
    

    
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $judul = $_POST['judul'];
            $author = $_POST['author'];
            $konten = $_POST['konten'];
            
            $data = [
                'judul' => $judul,
                'author' => $author,
                'konten' => $konten
            ];
    
            if ($this->model('Blog_model')->tambahkanblog($data) > 0) {
                 header('Location: ' . BASEURL . '/admin/blog');
                 exit;
            }
        }
    }
    
    public function delete($id)
    {
        if ($this->model('Admin_model')->hapusblog($id) > 0) {
            header('Location: ' . BASEURL . '/admin/blog');
            exit;
        }
    }

    public function deleteuser($id)
    {
        if ($this->model('Admin_model')->hapususer($id) > 0) {
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
    }

    public function promote($id)
    {
        session_start();
        $loggedInUserId = $_SESSION['user_id'];

        $activityType = 'promote'; // Tentukan jenis aktivitas (promosi)
        if ($this->model('Admin_model')->promoteUser($id)) {
            $this->AdminLog($loggedInUserId, $activityType);
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
    }

    public function demote($id)
    {
        session_start();
        $loggedInUserId = $_SESSION['user_id'];

        
        $activityType = 'demote'; // Tentukan jenis aktivitas (degradasi)
        if ($this->model('Admin_model')->demoteUser($id)) {
            $this->AdminLog($loggedInUserId, $activityType);
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
    }

    public function AdminLog($userId, $activityType)
    {
        if ($this->model('Admin_model')->activityLog($userId, $activityType)) {
            $message = 'Aktivitas telah berhasil dicatat.';
            echo $message;
        }
    }
    

}

