<?php

class Keuangan extends Controller {
    public function index(){
        $this->view('templates/header');
        $this->view('keuangan/main');
        $this->view('templates/footer');
    }
}