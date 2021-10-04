<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AnggotaController extends Controller
{
    //
    public function index()
    {
        $anggotas=Anggota::all();
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
        $user = new User();
        $user->name = $request->get('nama');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        $post = new Anggota();
        $post ->nama = $request->get('nama');
        $post ->alamat = $request->get('alamat');
        $post ->no_telp = $request->get('notelp');
        $post ->no_ktp = $request->get('noktp');
        // $post ->tempat_lahir = $request->get('tempatlahir');
        $post ->tgl_lahir = $request->get('tgllahir');
        $post ->gender = $request->get('customRadio');
        $post ->user_id = $user->id;
        $post->save();
        return redirect('customers');
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
        return view('anggota.show', compact('anggota'));
        //
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
        $user->name = $request->get('nama');
        $user->email = $request->get('email');
        $user->save();

        $anggota->nama = $request->get('nama');
        $anggota->alamat = $request->get('alamat');
        $anggota->email = $request->get('email');
        $anggota->telp = $request->get('telp');
        $anggota->ktp = $request->get('ktp');
        $anggota->tgl_lahir = $request->get('tgllahir');
        $anggota->gender = $request->get('gender');
        $anggota>save();
        return redirect('anggotas');
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
        return redirect()->route('anggotas.index')
                        ->with('success','Post has been deleted successfully');
        //
    }
}
