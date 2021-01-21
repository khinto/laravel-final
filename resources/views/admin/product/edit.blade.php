@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit  Product</div>

                <div class="card-body">


                   <form method="POST" action="{{ route('admin.products.update',$product->id)}}" >
                        {{ method_field('PUT')}}

                        @csrf

                        Name:
                        <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        <br />
                        description:
                        <input type="text" name="description" value="{{$product->description}}" class="form-control">
                        <br />
                        Price:
                        <input type="float" name="price" value="{{$product->Price}}" class="form-control">
                        <br />
                        Image:
                        <input type="file" name="image" value="{{$product->Image}}" class="form-control">

                        <br />
                        <input type="submit" value="Save">



                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
