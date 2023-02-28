<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('addcontact');
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
            "subject"=>"required",
            "message"=>"required"
        ]);

        // insert data in contacts table
        $data=array(
            "name"=>$request->name,
            "email"=>$request->email,
            "subject"=>$request->subject,
            "message"=>$request->message
        );

        //elequent query builder using ORM(object relational mapping model)
        ContactModel::create($data);
        //return view('crudapp.contact');
        return redirect('/contact')->with('success','Thanks For Contact With Us');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data=ContactModel::all();
        return view('admin.managecontact',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // edit from tablename where id='$id';
        $ed=ContactModel::where('id',$id)->first();
        return view('admin.editcontact',["ed"=>$ed]);
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
         ContactModel::where('id',$id)->delete();
         return redirect('/managecontacts')->with('del','Contact Deleted Successfully');
    }
}
