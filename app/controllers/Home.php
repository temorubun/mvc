<?php
class Home extends Controller {
    public function index(){


        $this->view('header');
        $this->view('navbar');
        $this->view('sidebar');
        $this->view('home');
        $this->view('footer');

    }
}