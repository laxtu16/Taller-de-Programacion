<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('plantillas/header_view.php').view("plantillas/nav_view.php").view('plantillas/QuienesSomos.php').view("plantillas/footer_view.php");
    }
}