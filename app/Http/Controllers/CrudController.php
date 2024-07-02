<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    {
        $dataArray = Crud::paginate(10);
        return view('index', compact('dataArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nim'       => 'required|min:5',
            'nama'      => 'required|min:10',
            'jurusan'   => 'required|min:10',
        ]);

        Crud::create([
            'nim'   => $request->nim,
            'nama'   => $request->nama,
            'jurusan'   => $request->jurusan,
        ]);

        return redirect()->route('crud.index')->with(['success' => 'Data berhasil disimpan !']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $data = Crud::findOrFail($id);
        return view('show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = crud::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nim' => 'required|min:5',
            'nama' => 'required|min:10',
            'jurusan' => 'required|min:10'
        ]);

        $data = crud::findOrFail($id);
        $data->update([
            'nim'   => $request->nim,
            'nama'   => $request->nama,
            'jurusan' => $request->jurusan,
        ]);
        return redirect()->route('crud.index')->with(['success' => 'Data berhasil diupdate !']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $data = crud::findOrFail($id);
        $data->delete();
        return redirect()->route('crud.index')->with(['success' => 'Data berhasil dihapus !']);
    }
}
