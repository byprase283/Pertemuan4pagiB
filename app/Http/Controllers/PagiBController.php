<?php

namespace App\Http\Controllers;

use App\Models\PagiB;
use Illuminate\Http\Request;

class PagiBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Halaman Pagi B \n";

        $dataArray = array();
        $pagiB = PagiB::all();
        foreach ($pagiB as $index => $data) {
            $dataArray[$index]['id']        = $data->id;
            $dataArray[$index]['nama']      = $data->nama;
            $dataArray[$index]['jurusan']   = $data->jurusan;
        }

        echo '<pre>';
        echo print_r($dataArray);
        echo '</pre>';
        exit();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PagiB $pagiB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PagiB $pagiB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PagiB $pagiB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PagiB $pagiB)
    {
        //
    }
}
