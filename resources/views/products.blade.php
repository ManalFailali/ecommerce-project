@extends('layouts.master-layout')
@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1><span class="orange-text">Our</span> Products</h1>
                    <p>All of our shop products</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->
<div class="product-section mt-150 mb-150">
	<div class="container">
        <div class="row">
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
                        </div>
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->description}}</p>
                        <h4>{{$item->price}} <span class="orange-text">$</span> </h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $products->links('vendor.pagination.view-pagination') }}
</div>

@endsection
