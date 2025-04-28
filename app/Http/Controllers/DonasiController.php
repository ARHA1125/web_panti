<?php

namespace App\Http\Controllers;
use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index(Request $request)
{
    $query = Donasi::query();

    // Filter pencarian
    if ($request->filled('search')) {
        $search = $request->search;
        $query->where(function($q) use ($search) {
            $q->where('nama', 'like', "%$search%")
              ->orWhere('email', 'like', "%$search%")
              ->orWhere('alamat', 'like', "%$search%");
        });
    }

    $donasis = $query->latest()->paginate(10)->withQueryString();

    return view('admin.donasi.index', compact('donasis'));
}

    // Simpan data donasi
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nominal' => 'required|integer|min:1000',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'email' => 'required|email',
            'keterangan' => 'nullable|string',
        ]);

        // Simpan ke database
        Donasi::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Terima kasih atas donasinya!');
    }
}
