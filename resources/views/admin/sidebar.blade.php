<div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('admin_template/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    @php
                        $user = Auth::user();
                    @endphp
                    <h1 class="h5">{{$user->name}}</h1>
                    <p>Admin</p>
                </div>
            </div>
                <!-- Sidebar Navidation Menus-->
            <span class="heading">Main</span>
            <ul class="list-unstyled">
                <li class="active"><a href="{{url('admin')}}"> <i class="icon-home"></i>Home </a></li>
                </li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Categories</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="{{url('admin/add_category')}}">Add Category</a></li>
                        <li><a href="{{url('admin/categories')}}">View Category</a></li>
                    </ul>
                </li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Products </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="{{url('admin/add_products')}}">Add product</a></li>
                        <li><a href="{{url('admin/products')}}">View product</a></li>
                    </ul>
                </li>
            </ul>
    </nav>
    <!-- Sidebar Navigation end-->
