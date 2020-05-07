<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\advice;
use RealRashid\SweetAlert\Facades\Alert;

class pesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Alert::success('Success Title', 'Success Message');
        // toast('Pesan Berhasil di simpan','success');


        return view('pesan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        //validate 

        request()-> validate([
            'email' => ['required'],
            'nama' => ['required'],
            'pesan' => ['required']
        ]);

        $advice = new advice;
        $advice->email = request('email');
        $advice->nama = request('nama');
        $advice->pesan = request('pesan');
        $advice->save();

        return redirect('/pesan')->with('success','Terimakasih .. ! pesan berhasil di simpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
