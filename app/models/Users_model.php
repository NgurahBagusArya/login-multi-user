<?php
class Users_Model{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultset();
     }

     public function getUsersById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
     }

     public function tambahDataUser($data)
     {
        $query = "INSERT INTO user (username, email, no_telp, password, level)
        VALUES (:username, :email, :no_telp, :password, :level)";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);

        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->bind('password', $hashedPassword);

        $data['level'] = "user";
        $this->db->bind('level', $data['level']);

        $this->db->execute();

        return $this->db->rowCount();

     }

     public function getUserByEmail($email) {
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);
        return $this->db->single();
    }
    
}

?>