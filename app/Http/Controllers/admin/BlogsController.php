<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogsModel;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.addblogs');
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
            "blogname"=>'required',
            "description"=>'required'
          
        ]);

        $data=array(
            "blogname"=>$request->blogname,
            "description"=>$request->description
            
        );

        BlogsModel::create($data);
        return redirect('/addblogs')->with('success','Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //select or show all data
        $data=BlogsModel::all();
        return view('admin.manageblogs',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // edit from tablename where id='$id';
        $ed=BlogsModel::where('id',$id)->first();
        return view('admin.editblogs',["ed"=>$ed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ed=array(
            "blogname"=>$request->blogname,
            "description"=>$request->description
            
        );

        BlogsModel::where('id',$id)->update($ed);
        return redirect('/manageblogs')->with('upd','Blogs Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //delete from tablename where id='id';
         BlogsModel::where('id',$id)->delete();
         return redirect('/manageblogs')->with('del','Blog Deleted Successfully');
    }
}
