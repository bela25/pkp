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
        $bisniss=Bisnis::paginate(10);
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
        $file = $request->file('gambar_produk');
       
        if($file != '')
        {
            $this->validate($request, [
                'gambar_produk'=> 'required|image|mimes:png,jpg,jpeg',
                'judul'      => 'required',
                'keterangan'    => 'required',
            ]);
            $file ->move(public_path('promosi'), $file->getClientOriginalName());
        }
       
        $bisnis = Bisnis::create([
            "judul" => $request->get('judul'),
            "keterangan" =>$request->get('keterangan'),
            "gambar_produk"=> $file->getClientOriginalName()
        ]);

        $bisnis->save();
        return redirect()->route('bisnis.index');
       
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
        $oldimage =$request->hidden_image;
        $file = $request->file('gambar_produk');
       
        if($file != '')
        {
            $this->validate($request, [
                'gambar_produk'=> 'required|image|mimes:png,jpg,jpeg',
                'judul'      => 'required',
                'keterangan'      => 'required',
            ]);
            $imagenew=$file->getClientOriginalName();
            $file ->move(public_path('promosi'),$imagenew);
        }else{
            $this->validate($request, [
                'judul'      => 'required',
                'keterangan'      => 'required',   
            ]);
            $imagenew=$oldimage;
        }
       
        $bisnis->update([
            "judul" => $request->get('judul'),
            "keterangan" => $request->get('keterangan'),
            "gambar_produk"=> $imagenew
        ]);
        $bisnis->save();
        return redirect()->route('bisnis.index');
       
      
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
