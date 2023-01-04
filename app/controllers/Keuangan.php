<?php

class Keuangan extends Controller {
    public function index(){
        $this->view('templates/header');
        $this->view('keuangan/main', $data=[$this->makeSession()]);
        $this->view('templates/footer');
    }

    public function makeSession(){
        include '../app/config/config.php';
        session_start();
        $nama = $_SESSION['nama_user'];
        if (!isset($nama)) {
            header("Location: ../index.php");
        }
        $nama_asli = $_SESSION['nama_asli'];
        return $nama_asli;
    }
}