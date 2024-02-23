<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index()
    {
        //get posts
        $siswas = Siswa::latest()->paginate(5);

        //render view with posts
        return view('siswas.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'kelas'   => 'required',
        ]);
        Siswa::create([
            'nama'     => $request->nama,
            'kelas'   => $request->kelas,
        ]);

        //redirect to index
        return redirect()->route('siswas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
         * edit
         *
         
         */
        public function edit(Siswa $siswa)
    {
        return view('siswas.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'kelas'   => 'required',
        ]);
        $siswa->update([
            'nama'     => $request->nama,
            'kelas'   => $request->kelas
        ]);
        return redirect()->route('siswas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Siswa $siswa)
    {
        //delete post
        $siswa->delete();

        //redirect to index
        return redirect()->route('siswas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
