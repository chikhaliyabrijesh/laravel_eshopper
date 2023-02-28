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
            <div class="alert alert-info mt-4">
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
        <h3 class="text-center" style="font-size:30px;">Add Products Form</h3>
        <hr class="border border-2 w-50 mx-auto bg-dark">
            <form method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group mt-3">
                    <label>Upload Photo : </label>
                    <input type="file" name="productimage" placeholder="Product Image" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <label>Product Name : </label>
                    <input type="text" name="productname"  placeholder="Product Name" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <label>Category : </label>
                    <select name="categoryname" placeholder="Select Category" class="form-control">
                    <option value="">-Select Category-</option>
                    @foreach($category as $category1)
                    <option value="{{ $category1->id }}">{{ $category1->categoryname }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label>Subcategory : </label>
                    <select name="subcategoryname" placeholder="Select Subcategory" class="form-control">
                    <option value="">-Select Subcategory-</option>
                    @foreach($subcategory as $subcategory1)
                    <option value="{{ $subcategory1->id }}">{{ $subcategory1->subcategoryname }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label>Description : </label>
                    <textarea name="description" placeholder="Description" class="form-control"></textarea>
                </div>

                <div class="form-group mt-3">
                    <label>Quantity : </label>
                    <input type="text" name="qty" placeholder="Quantity"  class="form-control">
                </div>

                <div class="form-group mt-3">
                    <label>Old Price : </label>
                    <input type="text" name="oldprice" placeholder="Old Price" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <label>New Price : </label>
                    <input type="text" name="newprice" placeholder="New Price" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-3">
                        <input type="submit" name="addproduct" value="Add Product" class="btn btn-md btn-primary bg-primary w-100">
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
