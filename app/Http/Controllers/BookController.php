<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class BookController extends Controller {
    public function index() {
        $buku = Book::all();
        return view('index', ['buku' => $buku]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'judul' => 'required', 
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'pengarang' => 'required'
        ]);

        Book::create([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'pengarang' => $request->pengarang,
        ]);

        return redirect('/');
    }

    public function update() {
        $buku = Book::all();
        return view('update', ['buku' => $buku]);
    }

    public function edit(Request $request, $id) {
        $this->validate($request, [
            'judul' => 'required', 
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'pengarang' => 'required'
        ]);
        
        $buku = Book::find($id);
        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->pengarang = $request->pengarang;
        $buku->save();

        return redirect('/');
    }

    public function destroy($id) {
        $buku = Book::find($id);
        $buku->delete();
        return redirect('/');
    }
}
