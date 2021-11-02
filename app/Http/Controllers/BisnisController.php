<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bisnis;
use Illuminate\Pagination\Paginator;

class BisnisController extends Controller
{
    //
    //
    public function index()
    {
        $bisniss=Bisnis::paginate(2);
        return view('bisnis.index',compact('bisniss'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bisnis.create');
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
        $this->validate($request, [
            'gambar_produk'=> 'required|image|mimes:png,jpg,jpeg',
            'judul'      => 'required',
            'keterangan'    => 'required',
            
        ]);
    
        //upload image
        $gambar_produk= $request->file('gambar_produk');
        $gambar_produk->storeAs('public/berita', $gambar_produk->hashName());
    
        $bisnis = Bisnis::create([
            'gambar_produk' => $gambar_produk->hashName(),
            'judul'     => $request->judul,
            'keterangan'     => $request->keterangan,
           
        ]);
    
        if($bisnis){
            //redirect dengan pesan sukses
            return redirect()->route('bisnis.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('bisnis.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Bisnis $bisnis)
    {
        return view('bisnis.show',compact('bisniss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Bisnis $bisnis)
    {
        return view('bisnis.update',compact('bisnis'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $bisnis = Bisnis::find($request->get('idbisnis'));

        $file = $request->file('gambar_produk');
        
        if(isset($file))
        {
            if(isset($bisnis->gambar_produk))
            {
                // unlink(public_path($promosi->gambar));
            }
            $gambar_produk = $file->storeAs('', $file->getClientOriginalName());
        }

        $bisnis->update([
            "judul" => $request->get('judul'),
            "keterangan"=> $request->get('keterangan'),
            "gambar_produk"=> $gambar_produk
        ]);

        return redirect()->route('bisnis.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */

    public function destroy(Bisnis $bisnis)
    {
        $bisnis->delete();
        return redirect()->route('bisnis.index');
        //
    }
}
