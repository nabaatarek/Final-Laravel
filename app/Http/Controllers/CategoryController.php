<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('category.all', compact('categories'));
    }
    public function save(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/category');
    }
}
