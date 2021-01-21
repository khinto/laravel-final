@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product</div>

                <div class="card-body">


                    <a href="{{route('admin.products.create')}}" class="btn btn-sm btn-primary">Add New</a><br><br>

                    <a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-primary">Category</a><br><br>




                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th></th>
                        </tr>
                        @forelse($products as $product)
                           <tr>
                               <td>{{$product->name}}</td>
                               <td><a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <form method="POST" action="{{  route('admin.products.destroy',$product->id)   }}">


                                    @csrf
                                    {{@method_field('DELETE')}}

                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger "/>


                                </form>



                            </td>




                            </tr>


                        @empty
                            <td colspan="2">No record found</td>
                        @endforelse


                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
