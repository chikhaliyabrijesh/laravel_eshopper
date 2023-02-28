@extends('layout')

@section('title_name')
Gallary page
@endsection

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Gallary</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Gallary</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid mt-4">
        <div class="row">
            @foreach($data as $row)
            <div class="col-md-2 d-flex flex-wrap align-items-center">
                <div class="card mt-4" style="border-radius: 8px; height:280px;"><img class="card-img-top" alt="card image cap" src="{{asset('uploads/gallary/'.$row->productimage)}}" height="278px;">
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection