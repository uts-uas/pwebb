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
}
