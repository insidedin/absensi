<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        return view('absensi.index', compact('absensi'));
    }

    public function create()
    {
        return view('absensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required',
            'status' => 'required',
            'gaji' => 'required|integer',
        ]);

        Absensi::create($request->all());
        return redirect()->route('absensi.index');
    }

    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.edit', compact('absensi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required',
            'status' => 'required',
            'gaji' => 'required|integer',
        ]);

        $absensi = Absensi::findOrFail($id);
        $absensi->update($request->all());
        return redirect()->route('absensi.index');
    }

    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();
        return redirect()->route('absensi.index');
    }
}
