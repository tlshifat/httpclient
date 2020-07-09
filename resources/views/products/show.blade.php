@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="row">
                    Categories
                </div> @foreach($categories as $category)
                    <div class="row">

                        <ul class="list-group">
                            <a href="" class="list-group-item">
                                {{$category->title}}
                            </a>
                        </ul>


                    </div>   @endforeach
            </div>
            <div class="col">
                <div class="row">
                    <h2></h2>
                    <h2>{{$product->title}} ({{$product->stock}})</h2>
                </div>
                <div class="row">
                            <div class="col-4">
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
                            </div>
                </div>

            </div>
        </div>


    </div>
@endsection
