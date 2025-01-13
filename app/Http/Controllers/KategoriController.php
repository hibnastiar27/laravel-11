<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index() {

        $kategori = Kategori::select('id','name')->paginate(10)->through(function($item) {
            return [
                'id' => $item->id,
                'name'=> $item->name
            ];
        });


        $katArray = $kategori->toArray();

        $columns = ['Kategori'];
        return view('kategori.kategori', compact('kategori', 'katArray','columns'));
    }


    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        $request -> validate([
            'name' => 'required|string|max:255',
        ]);

        Kategori::create([
            'name' => $request->name
        ]);

        return redirect('')->route('admin.kategori.index')->with('success','Kategori Berhasil Ditambahkan');
    }

    public function edit($id) {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function destroy($id) {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('admin.kategori')->with('success','Kategori Berhasil Dihapus');
    }

}
