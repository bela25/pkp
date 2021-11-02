<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Pagination\Paginator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AnggotaExport;


class AnggotaController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('search')){
            $anggotas=Anggota::where('nama','LIKE','%'. $request->search.'%')->paginate(5);
        }else{
           $anggotas=Anggota::paginate(5);
        }

        
       
        return view('anggota.index',compact('anggotas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
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
            'gambar_ktp'=> 'required|image|mimes:png,jpg,jpeg',
            'nama'      => 'required',
            'alamat'    => 'required',
            'email'     => 'required',
            'ktp'       => 'required',
            'telp'      => 'required',
            'gender'    => 'required',
        ]);
    
        //upload image
        $gambar_ktp= $request->file('gambar_ktp');
        $gambar_ktp->storeAs('public/image', $gambar_ktp->hashName());
    
        $anggota = Anggota::create([
            'gambar_ktp' => $gambar_ktp->hashName(),
            'nama'     => $request->nama,
            'alamat'     => $request->alamat,
            'email'     => $request->email,
            'ktp'     => $request->ktp,
            'telp'     => $request->telp,
            'gender'    =>$request->gender,

        ]);
    
        if(str_replace(url('/'), '', url()->previous()) == '/daftaranggota'){
            if($anggota){
                //redirect dengan pesan sukses
                return redirect()->route("daftaranggota")->with(['status' => 'Data Berhasil Disimpan!']);
            }else{
                //redirect dengan pesan error
                return redirect()->route("daftaranggota")->with(['status' => 'Data Gagal Disimpan!']);
            }
        } elseif (auth()->user()) {
            if($anggota){
                //redirect dengan pesan sukses
                return redirect()->route('anggota.index')->with(['status' => 'Data Berhasil Disimpan!']);
            }else{
                //redirect dengan pesan error
                return redirect()->route('anggota.index')->with(['status' => 'Data Gagal Disimpan!']);
            }
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    
     public function edit(Anggota $anggota)
    {
        return view('anggota.update',compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    
    {
        $anggota = Anggota::find($request->get('idanggota'));

        $file = $request->file('gambar_ktp');
        if(isset($file))
        {
            if(isset($anggota->gambar_ktp))
            {
                // unlink(public_path($promosi->gambar));
            }
            $gambar_ktp = $file->storeAs('', $file->getClientOriginalName());
        }

        $anggota->update([
            "nama" => $request->get('nama'),
            "alamat"=> $request->get('alamat'),
            "telp" => $request->get('telp'),
            "gender" => $request->get('gender'),
            "email"=> $request->get('email'),
            "ktp" => $request->get('ktp'),
            "gambar_ktp"=> $request->get('gambar_ktp')
        ]);

        return redirect()->route('anggota.index');
        //
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        return redirect()->route('anggota.index');
        //
    }
    public function exportexcel()
    {
        return Excel::download(new AnggotaExport,'dataanggota.xlsx');
    }
}
