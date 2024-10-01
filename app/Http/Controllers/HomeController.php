<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


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
    public function from(Request $request)
    {
        // Ambil data message dari request
        $dataMessage = $request->message;

        // Simpan data ke session
        $request->session()->put('message', $dataMessage);

        // Redirect ke halaman home
        return redirect('/home');
    }

     public function store(){
        $Product = new product();
        $Product->nama = "Laptop";
        $Product->harga = "10000000";
        $Product->stok = "10";
        $Product->deskripsi = "laptop murah";
        $Product->save();

        return ("data sukses dikirim");
    }

    public function show(){
    $Product = Product::all();
    return view("tableProduct", compact("Product"));
    }
}

