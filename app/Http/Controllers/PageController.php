<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama: Ahmad Iqbal Firmansyah | NIM: 2241760097';
    }
    public function articles($name){
        return 'Nama Artikel '.$name;
    }
    public function id($id){
        return 'Halaman Artikel dengan ID: '.$id;
    }

    public function modifikasi($id,$name){
        return 'Selamat datang <br>
                Nama : Ahmad Iqbal Firmansyah <br> 
                NIM : 2241760097 <br>
                Nama Artikel : '.$name.' <br>
                Halaman Artikel dengan ID: '.$id;
    }
    
}
