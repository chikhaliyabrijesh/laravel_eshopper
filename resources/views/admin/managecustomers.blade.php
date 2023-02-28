<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>


<div class="container-fluid h-100">
    <div class="row h-100">
    <div class="col-md-3 mt-5">
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

        <div class="col-lg-9 mt-5">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Customers</h5>

                <!-- flash message -->

                    @if(Session('del'))
                    <div class="alert alert-danger">
                        <strong class="text-dark">Hey!</strong>{{session('del')}}
                    </div>  
                    @endif

                <!-- Table with hoverable rows -->
                <div class="w-100" style="overflow:auto">
                    <table class="table table-hover" id="tab">
                        <thead>
                            <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $row)
                        <tr>
                            <th scope="row">{{$row->id}}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->password}}</td>
                            <td>{{$row->mobile}}</td>
                            <td>{{$row->address}}</td>
                            <td>
                                <a href='{{URL("/managecustomers/".$row->id)}}' onclick="return confirm('Are You Sure To Delete Customer ?')"><i class="bi bi-trash3-fill text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End Table with hoverable rows -->
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


