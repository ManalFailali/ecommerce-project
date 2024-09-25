
@extends('layouts.master-layout')
@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1><span class="orange-text">Our</span> Categories</h1>
                    <p>All of our shop Categories</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            @foreach ($categories as $item)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{url('/catrgory/'.$item->id)}}"><img src="{{url($item->image)}}" alt="{{$item->title}}" width="50" height="150"></a>
                    </div>
                    <h3>{{$item->title}}</h3>
                </div>
            </div>
            @endforeach
        </div>
        {{ $categories->links('vendor.pagination.view-pagination') }}
    </div>
</div>
@endsection
