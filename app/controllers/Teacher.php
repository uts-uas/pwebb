<?php

class Teacher extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Teacher';

        $this->view("templates/header", $data);
        $this->view("teacher/index");
        $this->view("templates/footer");
    }
}
