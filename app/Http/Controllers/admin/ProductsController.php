<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductsModel;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch category and sub category in addproduct form
        $category=DB::table('categories')->select('id','categoryname')->get();
        $subcategory=DB::table('subcategories')->select('id','subcategoryname')->get();

        return view('admin.addproduct',['category'=>$category,'subcategory'=>$subcategory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation applied
        $request->validate([
            "productimage"=>'required',
            "productname"=>'required',
            "categoryname"=>'required',
            "subcategoryname"=>'required',
            "description"=>'required',
            "qty"=>'required',
            "oldprice"=>'required',
            "newprice"=>'required'
        ]);

        // upload image
        $path=rand().'.'.$request->productimage->extension();
        $request->productimage->move(public_path('uploads/products'),$path);

        $data=array(
            "productimage"=>$path,
            "productname"=>$request->productname,
            "categoryid"=>$request->categoryname,
            "subcategoryid"=>$request->subcategoryname,
            "description"=>$request->description,
            "qty"=>$request->qty,
            "oldprice"=>$request->oldprice,
            "newprice"=>$request->newprice
        );

        ProductsModel::create($data);
        return redirect('/addproducts')->with('success','Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
         //select or show all data
        // $data=AddProductModel::all();
        // return view('manageproduct',['data'=>$data]);

        // joins tables 

        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();

        //joins ain addproducts with addcategories , add subcategories

        $data=DB::table('addproducts')
                ->join('categories','addproducts.categoryid','=','categories.id')
                ->join('subcategories','addproducts.subcategoryid','=','subcategories.id')
                ->select('addproducts.*','categories.categoryname','subcategories.subcategoryname')->get();

        return view('admin.manageproduct',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch category and sub category in addproduct form
        $category=DB::table('categories')->select('id','categoryname')->get();
        $subcategory=DB::table('subcategories')->select('id','subcategoryname')->get();

        // edit from tablename where id='$id';
        $ed=ProductsModel::where('id',$id)->first();
        return view('admin.editproducts',["ed"=>$ed,"category"=>$category,"subcategory"=>$subcategory]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // upload image
        $path=rand().'.'.$request->productimage->extension();
        $request->productimage->move(public_path('uploads/products/'),$path);

        $ed=array(
            "productimage"=>$path,
            "productname"=>$request->productname,
            "categoryid"=>$request->categoryname,
            "subcategoryid"=>$request->subcategoryname,
            "description"=>$request->description,
            "qty"=>$request->qty,
            "oldprice"=>$request->oldprice,
            "newprice"=>$request->newprice
        );

        ProductsModel::where('id',$id)->update($ed);
        return redirect('/manageproducts')->with('upd','Products Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete from tablename where id='id';
        ProductsModel::where('id',$id)->delete();
        return redirect('/manageproducts')->with('del','Product Deleted Successfully');
    }
}
