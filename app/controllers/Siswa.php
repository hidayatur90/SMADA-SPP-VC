<?php

class Siswa extends Controller {

    public function index($kelas='X-MIPA-1'){
        $this->view('templates/header');
        $this->view('/siswa/datapd', $data=[$kelas]);
        $this->view('templates/footer');
    }

}