<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * GET: Menampilkan semua data outlet
     */
    public function index()
    {
        $outlets = Outlet::all();
        return response()->json([
            'status' => 'success',
            'data' => $outlets
        ], 200);
    }

    /**
     * POST: Menyimpan data outlet baru
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'nama_outlet' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:15'
        ]);

        // Simpan data ke database
        $outlet = Outlet::create($request->all());

        // Kembalikan response sukses dengan data yang baru dibuat
        return response()->json([
            'status' => 'success',
            'message' => 'Outlet berhasil ditambahkan',
            'data' => $outlet
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
