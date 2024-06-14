<?php

class Admin extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Admin';

        $this->view("templates/header", $data);
        $this->view("admin/index");
        $this->view("templates/footer");
    }

    // page guru
    public function guru()
    {
        $data['title'] = 'Halaman guru';

        $this->view("templates/header", $data);
        $this->view("admin/guru/index");
        $this->view("templates/footer");
    }
}
