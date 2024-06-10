<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Penari;

class PenariController extends Controller
{
    public function index()
    {
        $penaris = Penari::all();
        return view('penari.index', compact('penaris'));
    }

    public function create()
    {
        return view('penari.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string|max:50',
            'Umur' => 'required|integer',
            'Alamat' => 'required|string|max:255',
        ]);

        Penari::create($request->all());

        return redirect()->route('penari.index')
            ->with('success', 'Penari created successfully.');
    }

    public function edit($id)
    {
        $penari = Penari::find($id);
        return view('penari.edit', compact('penari'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required|string|max:50',
            'Umur' => 'required|integer',
            'Alamat' => 'required|string|max:255',
        ]);

        $penari = Penari::find($id);
        $penari->update($request->all());

        return redirect()->route('penari.index')
            ->with('success', 'Penari updated successfully.');
    }

    public function delete($id)
    {
        $penari = Penari::find($id);
        return view('penari.delete', compact('penari'));
    }

    public function destroy($id)
    {
        $penari = Penari::find($id);
        $penari->delete();

        return redirect()->route('penari.index')
            ->with('success', 'Penari deleted successfully.');
    }
}
