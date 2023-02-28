<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="container mt-5 bg-white p-5">         
    
    <div class="row">
        <div class="col-md-3 mt-0">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <ul>
                        <li><a href="/addproducts" style="Font-size:20px; padding:20px; display:block;">Add Products</a></li>
                        <li><a href="/manageproducts" style="Font-size:20px; padding:20px;display:block;">Manage Products</a></li>
                        <li><a href="/addgallary" style="Font-size:20px; padding:20px; display:block;">Add Gallary</a></li>
                        <li><a href="/managegallary" style="Font-size:20px; padding:20px;display:block;">Manage Gallary</a></li>
                        <li><a href="/addblogs" style="Font-size:20px; padding:20px; display:block;">Add Blogs</a></li>
                        <li><a href="/manageblogs" style="Font-size:20px; padding:20px;display:block;">Manage Blogs</a></li>
                        <li><a href="/managecontacts" style="Font-size:20px; padding:20px; display:block;">Manage Contacts</a></li>
                        <li><a href="/managecustomers" style="Font-size:20px; padding:20px;display:block;">Manage Customers</a></li>
                    </ul>
                </div>
            </div>
        </div>   

    <div class="col-md-9">

    <h3 class="text-center" style="font-size:30px;">Edit Products Form</h3>
    <hr class="border border-2 w-50 mx-auto">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(Session('success'))
    <div class="alert alert-success">
        <span class="text-dark">Hey {{ session('success') }} </span>
    </div>
    @endif

    


    <form method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group mt-3">
        <label>Upload Photo : </label>
        <img src="{{ asset('uploads/gallary/' . $ed->productimage ) }}" width="85px" height="75px" class="card" alt="No image" width="85px" height="75px">
        <input type="file" name="productimage" value="{{$ed->productimage}}" placeholder="Product Image" class="form-control mt-3">
    </div>

    <div class="form-group mt-3">
        <label>Description : </label>
        <textarea name="description" placeholder="Description" class="form-control">{{$ed->description}}</textarea>
    </div>

    <div class="row">
        <div class="col-md-6 form-group mt-3">
            <input type="submit" name="updgallary" value="Update Image" class="btn btn-md btn-primary bg-primary w-100">
        </div>
        
        <div class="col-md-6 form-group mt-3">
            <input type="reset" name="reset" value="Reset" class="btn btn-md btn-danger bg-danger w-100">
        </div>
    </div>
  </form>

</div>
</div>
</x-app-layout>
