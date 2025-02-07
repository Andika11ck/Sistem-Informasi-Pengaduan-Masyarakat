<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\User;
use App\Models\Report;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        $categories = Category::all();
        $reports = Report::all();

        return view('admin.dashboard', compact('categories', 'reports'));
    }
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Admin berhasil ditambahkan!');
    }
    public function showAddForm()
    {
        return view('admin.add');
    }
    public function showAdmins()
    {
        $admins = Admin::all(); 
        return view('admin.admins', compact('admins')); 
    }
    public function showUsers()
    {
        $users = User::all(); 
        return view('admin.users', compact('users')); 
    }

    public function destroyAdmin($id)
    {
        $admin = Admin::findOrFail($id);

       
        if (auth('admin')->id() === $admin->id) {
            return redirect()->route('admin.dashboard')->with('error', 'Tidak dapat menghapus admin yang sedang login.');
        }

        $admin->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Admin berhasil dihapus.');
    }
    public function destroyUser($id)
    {
        $user = User::findOrFail($id);

       
       

        $user->delete();

        return redirect()->route('admin.dashboard')->with('success', 'User berhasil dihapus.');
    }
    public function detail($id)
    {
        $report = Report::findOrFail($id); 
        return view('admin.report_detail', compact('report')); 
    }
    public function deleteReport($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Laporan berhasil dihapus.');
    }
    public function validateReport(Request $request, $id)
    {
        $report = Report::findOrFail($id);

        // Validasi status
        if (!in_array($request->status, ['accepted', 'rejected'])) {
            return redirect()->route('admin.dashboard')->with('error', 'Status tidak valid.');
        }

        // Update status laporan
        $report->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Status laporan berhasil diperbarui.');
    }

    public function approve($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'Diterima';
        $report->save();
    
        return redirect()->back()->with('success', 'Laporan diterima.');
    }
    
    public function reject($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'Ditolak';
        $report->save();
    
        return redirect()->back()->with('success', 'Laporan ditolak.');
    }
    


}
