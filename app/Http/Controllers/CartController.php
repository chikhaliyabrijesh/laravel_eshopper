<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\CartModel;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pid=DB::table('addproducts')->select('id','productimage')->get();

        return view('productdetails',['pid'=>$pid]);
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
        $data=array(
            "pid"=>$request->pid,
            "description"=>$request->description,
            "newprice"=>$request->newprice,
            "qty"=>$request->qty
        );
 

        //dd($data);
        CartModel::create($data);
        return redirect('/showcart')->with('success','Product Added To Cart Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data=DB::table('cart')
                ->join('addproducts','cart.pid','=','addproducts.id')
                ->select('cart.*','addproducts.productimage')->get();

        return view('showcart',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete from tablename where id='id';
        CartModel::where('id',$id)->delete();
        return redirect('/showcart')->with('del','Product Deleted Successfully');
    }
}
