@extends('layouts.app')


@section('content')

<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-5 pr-70">
                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="">
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                    <h3>{{$product->name}}</h3>



                    </div>
                    <div class="details-price">
                        <span>${{$product->price}}</span>
                    </div>
                    <p>{!! $product->description !!}</p>

                    <div class="quickview-plus-minus">



                    </div>















                </div>



            </div>


            <div class="comments">
                <ul class="list-group">
                    <h2>Comments</h2>





                    @foreach ($product->comment as $comment )


                    <li class="list-group-item">
                        {{$comment->body}}


                    </li>

                    @endforeach










                </ul>



            </div>

            <div class="card">

                <div class="card-block">



                    <form method="POST" action="/product/{{$product->id}}/comment">
                        @csrf
                        <div class="form-group">
                            <textarea name="body" placeholder="Add Comment"></textarea>

                        </div>
                    </form>


                    <form>
                        <div class="form-group">
                            <button type="sumbit" class="btn btn-primary">Add Comment</button>
                        </div>
                    </form>

                </div>



            </div>






















        </div>
    </div>
</div>



@endsection
