@extends('layouts.master-layout')
@section('content')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Easy shopping online</p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
    <div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
                            @php
                            $total = 0;
                            @endphp
                        @foreach ($cart as $id => $details)
							<tbody>
								<tr class="table-body-row">
									<td class="product-remove"><a href="{{url('cart/delete_cart/'. $id)}}"><i class="far fa-window-close"></i></a></td>
									<td ><img src={{url($details['image'])}} alt="" width="50" height="50"></td>
									<td class="product-name">{{ $details['name'] }}</td>
									<td class="product-price">${{ $details['price'] }}</td>
									<td class="product-quantity">{{ $details['quantity'] }}</td>
									<td class="product-total">{{
                                        $details['quantity']*$details['price']}}$</td>
								</tr>
							</tbody>
                            @php
                            $total += $details['quantity'] * $details['price'];
                        @endphp
                    @endforeach
						</table>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Total:</strong></td>
									<td>{{$total}}$</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="{{url('cart/check_out')}}" class="boxed-btn black">Check Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
