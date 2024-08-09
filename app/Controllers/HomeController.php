<?php

class HomeController extends Controller {
    public function index() {
        $this->view('home/index');
    }

    public function flights() {
        $flightModel = $this->model('Flight');
        $flights = $flightModel->getAllFlights();
        $this->view('home/flights', ['flights' => $flights]);
    }
}
