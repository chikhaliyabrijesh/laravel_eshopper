<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GallaryModel;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.addgallary');
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
            "description"=>'required'
          
        ]);

        // upload image
        $path=rand().'.'.$request->productimage->extension();
        $request->productimage->move(public_path('uploads/gallary'),$path);

        $data=array(
            "productimage"=>$path,
            "description"=>$request->description
            
        );

        GallaryModel::create($data);
        return redirect('/addgallary')->with('success','Gallary Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //select or show all data
        $data=GallaryModel::all();
        return view('admin.managegallary',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // edit from tablename where id='$id';
        $ed=GallaryModel::where('id',$id)->first();
        return view('admin.editgallary',["ed"=>$ed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $path=rand().'.'.$request->productimage->extension();
        $request->productimage->move(public_path('uploads/gallary'),$path);

        $ed=array(
            "productimage"=>$path,
            "description"=>$request->description
            
        );

        GallaryModel::where('id',$id)->update($ed);
        return redirect('/managegallary')->with('upd','Gallary Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //delete from tablename where id='id';
         GallaryModel::where('id',$id)->delete();
         return redirect('/managegallary')->with('del','Image Deleted Successfully');
    }
}
