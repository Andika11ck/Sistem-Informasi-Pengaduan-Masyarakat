<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   public function index()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create(['name' => $request->category]);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus!');
    }
}
