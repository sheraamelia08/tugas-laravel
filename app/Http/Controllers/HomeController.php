<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data array yang berisi daftar buku
        $books = [
            ['title' => 'The Shining', 'author' => 'Stephen King', 'year' => 1977],
            ['title' => 'Dracula', 'author' => 'Bram Stoker', 'year' => 1897],
            ['title' => 'Frankenstein', 'author' => 'Mary Shelley', 'year' => 1818],
            ['title' => 'It', 'author' => 'Stephen King', 'year' => 1986],
            ['title' => 'The Haunting of Hill House', 'author' => 'Shirley Jackson', 'year' => 1959],
        ];

        // Mengirim data buku ke view 'home'
        return view('home', ['books' => $books]);
    }
}
