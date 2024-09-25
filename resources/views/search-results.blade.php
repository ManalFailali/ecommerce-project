@extends('layouts.master-layout')
@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Search Results for <span class="orange-text">"{{ $keywords }}"</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="search">
        {{-- Check if both products and categories are empty --}}
        @if($products->isEmpty() && $categories->isEmpty())
            <p>No results found </p>
        @else
            {{-- Display products results --}}
            @if($products->isNotEmpty())
                <h3>Products</h3>
                <ul>
                    @foreach ($products as $product)
                        <li>
                            <a href="{{ url('/product/' . $product->id) }}">
                                <strong>{{ $product->name }}</strong>
                            </a><br>
                            {{ $product->content }}
                        </li>
                    @endforeach
                </ul>
            @endif
            {{-- Display categories results --}}
            @if($categories->isNotEmpty())
                <h3>Categories</h3>
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{url('/catrgory/'.$category->id)}}">
                                <strong>{{ $category->title }}</strong>
                            </a><br>
                            {{ $category->content }}
                        </li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>
@endsection
