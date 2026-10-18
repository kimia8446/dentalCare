<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryController extends Controller
{
       public function index():View
    {
         $categories = Category::latest()->get();
         return view('admin.categories.index' , compact('categories'));
    }
    public function create():View
    {
        return view('admin.categories.create');
    }

   
    public function store(Request $request):RedirectResponse
    {
         $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories,slug'],
            'description' => ['nullable', 'string'],
        ]);
          Category::create($data);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'دسته‌بندی با موفقیت ایجاد شد.');
    }

    public function show(Category $category):View
    {
        return view('admin.categories.show', compact('category'));    }

    public function edit(Category $category): View
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories,slug,' . $category->id],
            'description' => ['nullable', 'string'],
        ]);

        $category->update($data);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'دسته‌بندی با موفقیت ویرایش شد.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'دسته‌بندی با موفقیت حذف شد.');
    }
}