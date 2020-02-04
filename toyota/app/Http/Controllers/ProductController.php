<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProductRequest;
use Illuminate\Validation\Rule;


class ProductController extends Controller
{
    //
    public function getList()
    {
    	$product = Product::all()->where('status', 1);
        $category = Category::all();
    	return view('cp.product.list',['product'=>$product,'category'=>$category]);
    }

    public function getAdd()
    {
        $category = Category::all();
    	return view('cp.product.add', ['category'=>$category]);
    }

    public function postAdd(ProductRequest $request)
    {
        $product = new Product;
        $product->name = request()->name;
        $product->price = request()->price;
        $product->cat_id = request()->category;
        $product->status = 1;

        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $extension  = $file->getClientOriginalExtension();
            $filename = request()->name;
            $avatar = removeUnicode($filename).".".$extension;
            if(file_exists("upload/photo/product/".$avatar))
            {
                while(file_exists("upload/photo/product/".$avatar))
                {
                    $avatar = removeUnicode($filename);
                    $avatar = $avatar ."_". str_random(4) .".".$extension;
                }
            }
            
            $file->move("upload/photo/product/", $avatar);
            $product->avatar = $avatar;                
        }

        $product->save();
        return redirect('cp/product/add')->with('notification','Thêm sản phẩm thành công');
    }

    public function getEdit($id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('cp.product.edit',['product'=> $product,'category'=> $category]);
    }

    public function postEdit(ProductRequest $request, $id)
    {
    	$product = Product::find($id);
        // $this->validate($request,
        //     [
        //         'name' => 'required|between:3,100|unique:Product,name,'.$product->id,
        //     ],
        //     [
        //         'name.required'=>'Bạn chưa nhập tên sản phẩm',
        //         'name.between'=>'Tên sản phẩm phải có độ dài từ 3 đến 100 ký tự',
        //         'name.unique' => 'Tên sản phẩm đã tồn tại',
        //     ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->cat_id = $request->category;
        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');

            $extension  = $file->getClientOriginalExtension();
            // $filename = $file->getClientOriginalName();
            $filename = $request->name;
            // $filename = explode('.', $filename)[0];
            $avatar = removeUnicode($filename).".".$extension;
            File::delete('upload/photo/product/'.$product->avatar);
            if(file_exists("upload/photo/product/".$avatar))
            {
                while(file_exists("upload/photo/product/".$avatar))
                {
                    $avatar = removeUnicode($filename);
                    $avatar = $avatar ."_". str_random(4) .".".$extension;
                }
            }
            $file->move("upload/photo/product/", $avatar);
            $product->avatar = $avatar;
        }
        
        $product->save();
        return redirect('cp/product/edit/'.$id)->with('notification','Chỉnh sửa sản phẩm thành công');
    }

     public function getDelete($id)
    {
        $product = Product::find($id);
        // $product->status = 4;
        // $product->save();
        File::delete('upload/photo/product/'.$product->avatar);
        $product->delete();
        return redirect('cp/product/list')->with('notification','Xóa sản phẩm thành công');
    }

    public function storeProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|email',
        ]);
        if ($validator->passes()) {
            return response()->json(['success'=>'Added new records.']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

}
