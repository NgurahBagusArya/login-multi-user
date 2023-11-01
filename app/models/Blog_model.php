<?php
class Blog_model{
   
   private $table = "blog";
   private $db;

   public function __construct()
   {
    $this->db = new database;
   }
       
    public function getAlltraveldata()
    {
        $this->db->query('SELECT * FROM ' . $this ->table);
        return $this->db->resultSet();
    }

    public function getblogById($id_blog)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_blog = :id_blog' );
        $this->db->bind('id_blog', $id_blog);
        return $this->db->single();
    }

    public function tambahkanblog($data)
    {
        $query = "INSERT INTO blog (judul, author, konten) VALUES (:judul, :author, :konten)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('konten', $data['konten']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
}
?>
