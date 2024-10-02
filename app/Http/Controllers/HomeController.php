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
        $Product->harga = "10000";
        $Product->stok = "10";
        $Product->deskripsi = "laptop Murah";
        $Product->save();

        return ("data sukses dikirim");
    }
    public function store2(){
        $Product = new product();
        $Product->nama = "Rumah";
        $Product->harga = "10000000";
        $Product->stok = "10";
        $Product->deskripsi = "Rumah Mahal";
        $Product->save();

        return ("data sukses dikirim");
    }
    public function store3(){
        $Product = new product();
        $Product->nama = "Kursi";
        $Product->harga = "100000";
        $Product->stok = "2";
        $Product->deskripsi = "kursi Murah";
        $Product->save();

        return ("data sukses dikirim");
    }
    public function store4(){
        $Product = new product();
        $Product->nama = "Cincin 1kg";
        $Product->harga = "100000000";
        $Product->stok = "5";
        $Product->deskripsi = "Cincin 1kg Buat Ayang";
        $Product->save();

        return ("data sukses dikirim");
    }

    public function show(){
    $Product = Product::all();
    return view("tableProduct", compact("Product"));
    }

    public function edit($id){
    $Product = Product::findOrFail($id);
    return view("editProduct", compact("Product"));
    }

    public function update(Request $request, $id){
        $Product = Product::findOrFail($id);

        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect("/show");
    }
    public function destroy($id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();
        return redirect("/show");
    }
}

