<?php

namespace App\Http\Controllers;

use App\Models\Tshirt;
use Illuminate\Http\Request;

class TshirtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Tshirt::all();
        return view('tshirt.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tshirt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tshirt::create([
            'produk_name' => $request->produk_name,
            'produk_jenis' => $request->produk_jenis,
            'produk_harga' => $request->produk_harga,
        ]);

        return redirect('tshirt');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Tshirt::findOrFail($id);
        return view('tshirt.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Tshirt::findOrFail($id);
        $row->update([
            'produk_name' => $request->produk_name,
            'produk_jenis' => $request->produk_jenis,
            'produk_harga' => $request->produk_harga,
        ]);

        return redirect('tshirt');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Tshirt::findOrFail($id);
        $row->delete();

        return redirect('tshirt');
    }
}
