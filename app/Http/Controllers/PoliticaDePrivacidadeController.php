<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaDePrivacidadeController extends Controller
{
    public function index()
    {
        return View('/ecomerce/politica');
    }
}
