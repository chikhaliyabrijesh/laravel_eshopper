<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Manage Products</h5>

            <!-- flash message -->

            @if(Session('upd'))
            <div class="alert alert-primary">
                <strong class="text-dark">Hey!</strong>{{session('upd')}}
            </div>  
            @endif


            @if(Session('del'))
            <div class="alert alert-danger">
                <strong class="text-dark">Hey!</strong>{{session('del')}}
            </div>  
            @endif
            
            <!-- Default Table -->
            <div class="w-100" style="overflow:auto">
            <table class="table table-hover" id="tab">
                <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Productimage</th>
                    <th scope="col">Productname</th>
                    <th scope="col">Category</th>
                    <th scope="col">Subcategory</th>
                    <th scope="col">Description</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Old Price</th>
                    <th scope="col">New Price</th>
                    <th scope="col">action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($data as $row)
                <tr align="center">
                    <th scope="row">{{$row->id}}</th>
                    <td><img src="{{asset('uploads/products/'.$row->productimage)}}" width="85px" height="75px"></td>
                    <td>{{$row->productname}}</td>
                    <td>{{$row->categoryname}}</td>
                    <td>{{$row->subcategoryname}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->qty}}</td>
                    <td>{{$row->oldprice}}</td>
                    <td>{{$row->newprice}}</td>
                    <td>
                        <a href='{{URL("/manageproducts/".$row->id)}}' onclick="return confirm('Are You Sure To Delete Product ?')"><i class="bi bi-trash3-fill text-danger"></i></a> |

                        <a href='{{URL("/editproducts/".$row->id)}}' onclick="return confirm('Are You Sure To Edit Product  ?')"><i class="bi bi-pencil-fill text-primary"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
            </div>
            <!-- End Default Table Example -->
            </div>
        </div>

        

            </div>
        </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
    $('#tab').DataTable();
    });
</script>

</x-app-layout>


