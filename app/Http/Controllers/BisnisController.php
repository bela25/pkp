<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BisnisController extends Controller
{
    //
    //
    public function index()
    {
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
        $post = new Bisnis();
        $post ->judul = $request->get('judul');
        $post ->keterangan = $request->get('keterangan');
        $post->save();
        return redirect('bisniss');
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
        return view('bisnis.edit',compact('bisniss'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bisnis $bisnis)
    {
        $bisnis ->judul = $request->get('judul');
        $bisnis ->keterangan = $request->get('keterangan');

        $bisnis->save();
        return redirect('bisniss');
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
        return redirect()->route('bisniss.index')
                        ->with('success','Post has been deleted successfully');
        //
    }
}
