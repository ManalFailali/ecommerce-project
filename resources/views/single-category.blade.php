
@extends('layouts.master-layout')
@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1><span class="orange-text"></span> {{$category->title}}</h1>
                    <p>All prouducts of {{$category->title}} category</p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-section mt-150 mb-150">
    <div class="container">
<div class="row">
    @if($products->isEmpty())
        <div class="col-lg-12 text-center">
            <h3>There are no products in the {{$category->title}} category!</h3>
        </div>
    @else
        @foreach ($products as $item)
        <div class="col-lg-4 col-md-6 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <?php
                        $images = explode('|', $item->images);
                        $firstImage = $images[0];
                    ?>
                    <a href="{{ url('/product/' . $item->id) }}">
                        <img src="{{url($firstImage)}}" alt="">
                    </a>
                    <h4>{{$item->name}}</h4>
                    <p>{{$item->description}}</p>
                    <h4>{{$item->price}} <span class="orange-text">$</span></h4></a>
                </div>
                <h3>{{$item->title}}</h3>
            </div>
        </div>
        @endforeach
    @endif
</div>
</div>
</div>
@endsection
