<?php

class BookingController extends Controller {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $flightId = $_POST['flight_id'];
            $userId = $_POST['user_id'];
            $passengerDetails = $_POST['passenger_details'];

            $bookingModel = $this->model('Booking');
            if ($bookingModel->createBooking($flightId, $userId, $passengerDetails)) {
                header('Location: /home/flights');
            } else {
                echo "Booking failed.";
            }
        } else {
            $this->view('booking/create');
        }
    }
}
