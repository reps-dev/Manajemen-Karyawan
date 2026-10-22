<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'id_desc');

        $query = Karyawan::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('nip', 'like', "%{$search}%")
                    ->orWhere('jabatan', 'like', "%{$search}%")
                    ->orWhere('divisi', 'like', "%{$search}%")
                    ->orWhere('gaji', 'like', "%{$search}%");
            });
        }

        match ($sort) {
            'nama_asc' => $query->orderBy('nama', 'asc'),
            'nama_desc' => $query->orderBy('nama', 'desc'),
            'gaji_asc' => $query->orderBy('gaji', 'asc'),
            'gaji_desc' => $query->orderBy('gaji', 'desc'),
            'nip_asc' => $query->orderBy('nip', 'asc'),
            'nip_desc' => $query->orderBy('nip', 'desc'),
            default => $query->orderBy('id', 'desc'),
        };

        $karyawans = $query->paginate(10)->appends(['search' => $search, 'sort' => $sort]);

        return view('karyawan.index', compact('karyawans', 'search', 'sort'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('success', 'karyawan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->update($request->all());
        return redirect()->route('karyawan.index')->with('success', 'karyawan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'karyawan berhasil dihapus');
    }
}
