<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Category;
class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function create()
    {
        $categories = Category::all(); 
        
        return view('user.create_report', compact('categories'));
    }
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu!');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'proof' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ], [
            // Pesan error untuk 'name'
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            
            // Pesan error untuk 'email'
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            
            // Pesan error untuk 'phone'
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.string' => 'Nomor telepon harus berupa teks.',
            'phone.max' => 'Nomor telepon tidak boleh lebih dari 20 karakter.',
            
            // Pesan error untuk 'address'
            'address.required' => 'Alamat wajib diisi.',
            'address.string' => 'Alamat harus berupa teks.',
            
            // Pesan error untuk 'category'
            'category.required' => 'Kategori wajib dipilih.',
            'category.string' => 'Kategori harus berupa teks.',
            
            // Pesan error untuk 'description'
            'description.required' => 'Deskripsi wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',
            
            // Pesan error untuk 'proof'
            'proof.required' => 'Field bukti pengaduan wajib diisi.',
            'proof.mimes' => 'Bukti pengaduan harus berupa file dengan format jpg, png, atau pdf.',
            'proof.max' => 'Ukuran bukti pengaduan tidak boleh lebih dari 2MB.',
        ]);
        

       
        $proofPath = null;
        if ($request->hasFile('proof')) {
            
            $proofPath = $request->file('proof')->store('proofs', 'public');
        }

        // Save to database
        Report::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'category' => $request->category,
            'description' => $request->description,
            'proof' => $proofPath,
           
        ]);

        return redirect('/user/reports')->with('success', 'Pengaduan berhasil dikirim!');
    }
    public function viewReports()
    {
        $reports = Report::latest()->get();
        return view('user.view_reports', compact('reports'));
    }
    public function help()
    {
        return view('user.help');
    }
    public function contact()
    {
        return view('user.contact');
    }
}
