<?php


class RoutesController
{
    public function index()
    {
        require './views/public/index.view.php';
    }

    public function contact()
    {
        require './views/public/contact.view.php';
    }

    public function about()
    {
        require './views/public/about.view.php';
    }

    public function message()
    {
        die(var_dump($_POST));
    }
}
