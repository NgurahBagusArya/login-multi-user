<?php
class Trip_model{
   
   private $table = "trip";
   private $db;

   public function __construct()
   {
    $this->db = new database;
   }
    
    public function getAlltripdata()
    {
        $this->db->query('SELECT * FROM ' . $this ->table);
        return $this->db->resultSet();
    }

    public function getTripById($trip_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE trip_id = :trip_id' );
        $this->db->bind('trip_id', $trip_id);
        return $this->db->single();
    }

    
}
?>
