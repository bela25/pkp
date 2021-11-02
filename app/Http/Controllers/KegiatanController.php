<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans=Kegiatan::paginate(10);
        return view('kegiatan.index',compact('kegiatans'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
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
        // $kegiatan = Kegiatan::find($request->get('idkegiatan'));
        // $oldimage =$request->hidden_image;
        $file = $request->file('gambar_kegiatan');
       
        if($file != '')
        {
            $this->validate($request, [
                'gambar_kegiatan'=> 'required|image|mimes:png,jpg,jpeg',
                'judulkegiatan'      => 'required',
            ]);
            $file ->move(public_path('image'), $file->getClientOriginalName());
        }
       
        $kegiatan= Kegiatan::create([
            "judulkegiatan" => $request->get('judulkegiatan'),
            "gambar_kegiatan"=> $file->getClientOriginalName()
        ]);

        $kegiatan->save();
        return redirect()->route('kegiatan.index');
       
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan.show',compact('kegiatans'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
       
        return view('kegiatan.update',compact('kegiatan'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $kegiatan = Kegiatan::find($request->get('idkegiatan'));
        $oldimage =$request->hidden_image;
        $file = $request->file('gambar_kegiatan');
       
        if($file != '')
        {
            $this->validate($request, [
                'gambar_kegiatan'=> 'required|image|mimes:png,jpg,jpeg',
                'judulkegiatan'      => 'required',
            ]);
            $imagenew=$file->getClientOriginalName();
            $file ->move(public_path('image'),$imagenew);
        }else{
            $this->validate($request, [
                'judulkegiatan'      => 'required',      
            ]);
            $imagenew=$oldimage;
        }
       
        $kegiatan->update([
            "judulkegiatan" => $request->get('judulkegiatan'),
            "gambar_kegiatan"=> $imagenew
        ]);
        $kegiatan->save();
        return redirect()->route('kegiatan.index');
       
      
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index');
        //
    }
}
