<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public $addProduct = false;
    public $editProduct = false;
    public $productName, $desc, $weight, $categoryId, $productname, $Desc, $Weight, $categoryID;

    public function productAdd()
    {
        $this->validate([
            'productName' => 'required|string',
            'desc' => 'required|string',
            'weight' => 'required|numeric',
            'categoryId' => 'required',
        ]);

        $check = Product::where('name', $this->productName)->count();

        if ($check == 1) {
            return redirect('product')->with('warning', 'Category already exist!');
        } else {
            Product::create([
                'name' => $this->productName,
                'desc' => $this->desc,
                'weight' => $this->weight,
                'category_id' => $this->categoryId
            ]);
            return redirect('product')->with('status', 'New Product Added!');
        }
    }

    public function viewProduct($id){
        $this->editProduct = true;
        $singleProduct = Product::find($id);
        $this->productname = $singleProduct->name;
        $this->Desc = $singleProduct->desc;
        $this->Weight = $singleProduct->weight;
        $this->categoryID = $singleProduct->category_id;
        $this->category = $id;
    }

    public function updateProduct(){
        $product = Product::find($this->category);
        $product->update([
            'name' => $this->productname,
                'desc' => $this->Desc,
                'weight' => $this->Weight,
                'category_id' => $this->categoryID,
        ]);
        return redirect('category')->with('status', 'Product Updated!');
    }

    public function deleteProduct($id){
        Product::find($id)->delete();
        return redirect('category')->with('warning', 'Category Removed!');
    }

    public function render()
    {
        $categories = Category::all();
        $products = Product::paginate(5);
        return view('livewire.products', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
