<?php

namespace App\Http\Controllers;

use illuminate\http\Request;
class PageControl extends Controller 
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Rofiqoh Wahyuningtyas';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }

}