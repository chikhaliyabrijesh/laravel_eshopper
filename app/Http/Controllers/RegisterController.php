<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RegisterModel;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
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
        // validations applied here
        $request->validate([
             
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required|min:8|max:8",
            "confirmpassword"=>"required_with:password|same:password|min:8|max:8",
            "mobile"=>"required|min:10|max:10",
            "address"=>"required"
        ]);

        // insert data in contacts table
        $data=array(
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "mobile"=>$request->mobile,
            "address"=>$request->address
        );

        //elequent query builder using ORM(object relational mapping model)
        RegisterModel::create($data);
        //return view('crudapp.contact');
        return redirect('/userregister')->with('success','Thanks For Create Account With Us');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data=RegisterModel::all();
        return view('admin.managecustomers',["data"=>$data]);
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
        RegisterModel::where('id',$id)->delete();
        return redirect('/managecustomers')->with('del','Customer Deleted Successfully');
    }
}
