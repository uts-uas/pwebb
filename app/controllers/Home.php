<?php

class Home extends Controller
{

    public function index()
    {
        $data['title'] = 'Landing Page';

        $this->view("templates/header");
        $this->view("home/index");
        $this->view("templates/footer");
    }
}
