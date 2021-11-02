<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas=Berita::paginate(2);
        return view('berita.index',compact('beritas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'gambar_berita'=> 'required|image|mimes:png,jpg,jpeg',
            'judul_berita'      => 'required',
            'isi_berita'    => 'required',
            
        ]);
    
        //upload image
        $gambar_berita= $request->file('gambar_berita');
        $gambar_berita->storeAs('public/berita', $gambar_berita->hashName());
    
        $berita = Berita::create([
            'gambar_berita' => $gambar_berita->hashName(),
            'judul_berita'     => $request->judul_berita,
            'isi_berita'     => $request->isi_berita,
           
        ]);
    
        if($berita){
            //redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        return view('berita.show',compact('beritas'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('berita.update',compact('berita'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $berita = Berita::find($request->get('idberita'));

        $file = $request->file('gambar_berita');
        if(isset($file))
        {
            if(isset($berita->gambar_berita))
            {
                // unlink(public_path($promosi->gambar));
            }
            $gambar_berita = $file->storeAs('public/berita', $file->getClientOriginalName());
        }

        $berita->update([
            "judul_berita" => $request->get('judul_berita'),
            "isi_berita"=> $request->get('isi_berita'),
            "gambar_berita"=> $gambar_berita
        ]);

        return redirect()->route('berita.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('berita.index');
        //
    }
}
