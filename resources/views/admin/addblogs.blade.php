<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

  <!-- add product form here -->
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

        <!-- flash messages -->
        <div class="col-md-9 mt-0">

        @if(Session("success"))
            <div class="alert alert-primary mt-4">
                <span class="text-dark"><strong>Hey!</strong>{{ Session('success') }} </span>
            </div>    
        @endif

        @if($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach    
                </ul>
            </div>
        @endif

        <div class="col-md-9 mt-0">
        <h3 class="text-center" style="font-size:30px;">Add Blogs Form</h3>
        <hr class="border border-2 w-50 mx-auto bg-dark">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label>Blog Name : </label>
                    <input type="text" name="blogname" placeholder="Blog Name" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <label>Description : </label>
                    <textarea name="description" placeholder="Description" class="form-control"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-3">
                        <input type="submit" name="addblog" value="Add Blog" class="btn btn-md btn-primary bg-primary w-100">
                    </div>
                    
                    <div class="col-md-6 form-group mt-3">
                        <input type="reset" name="reset" value="Reset" class="btn btn-md btn-danger bg-danger w-100">
                    </div>
                </div>
            </form>      
        </div>
    </div>
</div>            
</x-app-layout>
