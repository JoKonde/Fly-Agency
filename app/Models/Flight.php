<?php

class Flight extends Model {
    public function getAllFlights() {
        $stmt = $this->db->query("SELECT * FROM flights");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
