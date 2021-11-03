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
           $anggotas=Anggota::paginate(10);
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
        $file = $request->file('gambar_ktp');
       
        if($file != '')
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
            
            $file ->move(public_path('anggota'), $file->getClientOriginalName());
        }
       
        $anggota = Anggota::create([
            "nama" => $request->get('nama'),
            "alamat" =>$request->get('alamat'),
            "email" =>$request->get('email'),
            "ktp" =>$request->get('ktp'),
            "telp" =>$request->get('telp'),
            "gender" =>$request->get('gender'),
            "gambar_ktp"=> $file->getClientOriginalName()
        ]);

        $anggota->save();
        return redirect()->route('anggota.index');
    
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
        $this->validate($request, [
            'nama'      => 'required',
            'alamat'    => 'required',
            'email'     => 'required',
            'ktp'       => 'required',
            'telp'      => 'required',
            'gender'    => 'required',
        ]);
        $anggota = Anggota::find($request->get('idanggota'));
        $file = $request->file('gambar_ktp');
       
        if($file != '')
        {
            $this->validate($request, [
                'gambar_ktp'=> 'required|image|mimes:png,jpg,jpeg',
            ]);
            $gambar_ktp = $file->getClientOriginalName();
            $file ->move(public_path('anggota/'),$gambar_ktp);
        } else {
            $gambar_ktp = $anggota->gambar_ktp;
        }
        
        $anggota->update([
            "nama" => $request->get('nama'),
            "alamat"=> $request->get('alamat'),
            "telp" => $request->get('telp'),
            "gender" => $request->get('gender'),
            "email"=> $request->get('email'),
            "ktp" => $request->get('ktp'),
            "gambar_ktp"=> $gambar_ktp
        ]);
        $anggota->save();

        return redirect()->route('anggota.index');
       
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
