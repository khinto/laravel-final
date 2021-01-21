@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        @foreach ($allproduct as $product)


        <div class="col-4">
        <div class="card ">


            <img class="card-img-top" src="{{asset('default.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h4><a href="{{route('products.show', $product)}}">{{$product->name}}</a></h4>
                <p class="card-text">{{$product->created_at}}</p>
            </div>

        </div>
        </div>
        @endforeach




    </div>
</div>
@endsection
