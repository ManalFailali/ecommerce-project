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
            <div class="container-fluid">
                <form action="{{url('admin/categories/update_category')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div>
                            <input type="hidden" name="category_id" value="{{$category->id}}"><br>
                            <label for="category_title">Category name</label>
                            <input type="text" name="category_title" value="{{$category->title}}"><br>
                            <label for="category_description">Category description</label>
                            <textarea name="category_description"  value="{{$category->description}}"></textarea><br>
                            <label for="category_image">Category image</label>
                            <input type="file" name="category_image" value="{{$category->image}}"> <img src="{{url($category->image)}}" width="50" height="50" alt=""><br>
                            <input class="btn btn-primary" type="submit" value="update category">
                        </div>
                </form>
            </div>
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

