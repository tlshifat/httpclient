@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="row">
                    Categories
                </div>

                <div class="row">
                    <div class="col">
                    <ul class="list-group">
                        @foreach($categories as $category)

                            <a href="" class="list-group-item">
                                {{$category->title}}
                            </a>

                        @endforeach
                    </ul>
                    </div>
                </div>


            </div>
            <div class="col">
                <div class="row">
                    <h2>Products</h2>
                </div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-4">
                        <a href="{{route('product.show',['title'=>$product->title,'id'=>$product->identifier])}}" class="href">

                            <div class="card">
                                <img src="{{$product->picture}}" alt="" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    {{$product->title}}
                                </div>
                                <div class="card-text">
                                    {{$product->details}}
                                </div>
                            </div>

                        </a>   </div>
                    @endforeach

                </div>

            </div>
        </div>


    </div>
@endsection
