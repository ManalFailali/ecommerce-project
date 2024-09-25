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
            <table>
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td><img src="{{ url($item->image) }}" alt="{{ $item->title }}" width="50" height="50"></td>
                        <td>
                            <a class='delete' href="{{ url('admin/categories/delete_category/'. $item->id) }}">Delete</a>
                            <a class='edit' href="{{ url('admin/categories/edit_category/'. $item->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination -->
            {{ $categories->links('vendor.pagination.view-pagination') }}
        </div>
    </div>
<!-- JavaScript files -->
<script src="{{ asset('admin_template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin_template/vendor/popper.js/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin_template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_template/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('admin_template/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin_template/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin_template/js/charts-home.js') }}"></script>
<script src="{{ asset('admin_template/js/front.js') }}"></script>
</body>
</html>
