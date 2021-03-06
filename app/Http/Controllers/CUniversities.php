<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CUniversities extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function nama_universitas(Request $request){
        $universitas = DB::table('users')
            ->select('users.nama_depan','users.nama_belakang')
            ->join('universitas','universitas.id_users','=','users.id')
            ->where('universitas.id','=',$request["id"])
            ->get();

        return (['status' => 'success', 'data' => $universitas, 'RC' => '00' , 'message' => 'Berhasil mengembalikan nama universitas atau institusi']);
    }

    public function daftar(){
        $universitas = DB::table('universitas')
            ->select('universitas.id','nama_depan','nama_belakang')
            ->join('users','users.id','=','universitas.id_users')
            ->orderBy('nama_depan','asc')
            ->get();

        return (['status' => 'success', 'data' => $universitas, 'RC' => '00' , 'message' => 'Berhasil mengembalikan daftar universitas']);
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
    public function store(Request $request)
    {
        //
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
