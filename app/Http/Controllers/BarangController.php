<?php

namespace App\Http\Controllers;

use App\Http\Resources\BarangResource;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function __construct(){
        $this->middleware(['auth:sanctum'])->only('store','update');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::paginate(10);

        return response()->json(['data' => $barang]);
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
        $barang = Barang::create([
            'jenis_barang' => $request->jenis_barang,
            'nama_barang' => $request->nama_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'pemilik' => $request->pemilik,
        ]);

        return new BarangResource($barang);
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return response()->json(['data' => $barang]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $barang->jenis_barang = $request->jenis_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->pemilik = $request->pemilik;
        $barang->save();

        return response()->json(['data' => $barang]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
