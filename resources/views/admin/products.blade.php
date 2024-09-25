
<!DOCTYPE html>
<html>
<head>
@include('admin.css')
</head>
<body>
@include('admin.header')
@include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <table >
                <thead>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Category Id</th>
                    <th>Images</th>
                    <th>Option</th>
                </thead>
                @foreach ($products as $item)
                <tbody>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->category_id}}</td>
                    <td>  <!-- Check if the images field is not empty or null -->
                        @if(!empty($item->images))
                            @php
                                $images = explode('|', $item->images);  // Decode the JSON to an array
                            @endphp
                            <!-- Check if $images is an array before looping -->
                            @if(is_array($images) && count($images) > 0)
                                @foreach ($images as $image)
                                    <img src="{{ asset($image) }}" alt="Product Image" style="width: 10px; height: 10px;">
                                @endforeach
                            @else
                                <p>No images available</p>
                            @endif
                        @else
                            <p>No images available</p>
                        @endif</td>
                        <td>
                            <a class="delete" href={{url('admin/products/delete_product/'. $item->id)}}>delete</a>
                            <a class="edit" href={{url('admin/products/edit_product/'. $item->id)}}>Edit</a>
                        </td>
                </tbody>
                @endforeach
            </table>
            {{ $products->links('vendor.pagination.view-pagination') }}
        </div>
    </div>
    <!-- JavaScript files-->
<script src="{{asset('admin_template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin_template/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('admin_template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_template/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('admin_template/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin_template/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin_template/js/charts-home.js')}}"></script>
<script src="{{asset('admin_template/js/front.js')}}"></script>
</body>
</html>


