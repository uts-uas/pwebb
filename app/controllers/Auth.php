<?php

class Auth extends Controller
{
    public function login()
    {
        $data['title'] = 'Halaman Login';

        $this->view("templates/header");
        $this->view("auth/login");
        $this->view("templates/footer");
    }
}
