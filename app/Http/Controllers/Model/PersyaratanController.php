<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Models\Persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PersyaratanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Persyaratan::orderBy('nama_persyaratan', 'asc')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->make('true');
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
        $request->validate([
            'nama_persyaratan' => 'required|unique:persyaratans',
        ]);

        $nama_persyaratan = $request->nama_persyaratan;

        DB::beginTransaction();
        try {
            $data = Persyaratan::create([
                'nama_persyaratan' => $nama_persyaratan
            ]);

            // activity('Persyaratan', "Menambahkan data Persyaratan baru $nama_persyaratan", $data);

            DB::commit();
            return "sukses";
        } catch (\Exception $e) {
            DB::rollBack();
            if (config('app.debug')) {
                return "Error: " . $e->getMessage();
            } else {
                return "Terjadi kesalahan.";
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Persyaratan $persyaratan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persyaratan $persyaratan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persyaratan $persyaratan)
    {
        $request->validate([
            'nama_persyaratan' => 'required|unique:persyaratans,nama_persyaratan,' . $persyaratan->id,
        ]);

        $nama_persyaratan = $request->nama_persyaratan;

        DB::beginTransaction();
        try {
            $persyaratan->nama_persyaratan = $nama_persyaratan;
            $persyaratan->save();

            // activity('Persyaratan', "Mengedit data Persyaratan $persyaratan->nama_persyaratan", $persyaratan);

            DB::commit();
            return "sukses";
        } catch (\Exception $e) {
            DB::rollBack();
            if (config('app.debug')) {
                return "Error: " . $e->getMessage();
            } else {
                return "Terjadi kesalahan.";
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persyaratan $persyaratan)
    {
        DB::beginTransaction();
        try {
            $persyaratan->delete();

            // activity('Persyaratan', "Menghapus data Persyaratan $persyaratan->nama_persyaratan", $persyaratan);

            DB::commit();
            return "sukses";
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
