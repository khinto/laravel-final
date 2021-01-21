@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add  Product</div>

                <div class="card-body">


                   <form method="POST" action="{{ route('admin.products.store')}}" >
                        @csrf

                        Name:
                        <input type="text" name="name" class="form-control">
                        <br />
                        description:
                        <input type="text" name="description" class="form-control">
                        <br />
                        Price:
                        <input type="float" name="price" class="form-control">
                        <br />
                        Image:
                        <input type="text" name="image" class="form-control">

                        <br />
                        <input type="submit" value="Save">



                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
