<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    public $addCategory = false;
    public $editCategory = false;
    public $categoryName, $categoryname, $categoryId;

    public function categoryAdd()
    {

        $this->validate([
            'categoryName' => 'required|string',
        ]);

        $check = Category::where('cat_name', $this->categoryName)->count();

        if ($check == 1) {
            return redirect('category')->with('warning', 'Category already exist!');
        } else {
            Category::create([
                'cat_name' => $this->categoryName,
            ]);
            return redirect('category')->with('status', 'New Category Added!');
        }
    }

    public function viewCategory($id)
    {
        // dd($id);
        $this->editCategory = true;
        $singleCategory = Category::find($id);
        $this->categoryname = $singleCategory->cat_name;
        $this->categoryId = $id;
    }

    public function updateCategory()
    {
        $this->validate([
            'categoryname' => 'required|string',
        ]);

        $category = Category::find($this->categoryId);
        $category->update([
            'cat_name' => $this->categoryname,
        ]);

        return redirect('category')->with('status', 'Category Updated!');
    }

    public function deleteCategory($id){
        Category::find($id)->delete();
        return redirect('category')->with('warning', 'Category Removed!');
    }


    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.categories', [
            'categories' => $categories,
        ]);
    }
}
