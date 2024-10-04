<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


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

    public function store(Request $request){

        $validator = validator::make($request->all(), [
            'nama' => 'required|string|max:225',
            'stok' => 'required|integer|min:5',
            'harga' => 'required|numeric|min:2',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Product = new product();
        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect()->back();
    }



    public function show(){
    $Product = Product::Paginate(3);
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
    public function input(){
        return view("inputProduct");
    }
}

