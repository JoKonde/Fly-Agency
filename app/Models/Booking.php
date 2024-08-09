<?php

class Booking extends Model {
    public function createBooking($flightId, $userId, $passengerDetails) {
        $stmt = $this->db->prepare("INSERT INTO bookings (flight_id, user_id, passenger_details) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $flightId, PDO::PARAM_INT);
        $stmt->bindParam(2, $userId, PDO::PARAM_INT);
        $stmt->bindParam(3, $passengerDetails, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
