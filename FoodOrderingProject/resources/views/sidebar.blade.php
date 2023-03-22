@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/BackEndSourceFile/dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Site logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/BackEndSourceFile/dist')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- Category start here-->
          <li class="nav-item has-treeview {{ ($prefix=='/category')?'menu-open':'' }}">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tags" aria-hidden="true"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('show_cate_table')}}" class="nav-link {{ ($route=='show_cate_table')?'active':'' }} ">
                <i class="fa fa-plus-circle nav-icon" aria-hidden="true"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('manage_cate')}}" class="nav-link {{ ($route=='manage_cate')?'active':'' }}">
                <i class="fa fa-edit nav-icon" aria-hidden="true"></i>
                  <p>Manage Category</p>
                </a>
              </li>
         </ul>
      </li>
      <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ ($prefix=='/delivery')?'menu-open':'' }}">
            <i class="fa fa-car nav-icon" aria-hidden="true"></i>
              <p>
                Delivery Boy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('show_deliveryBoy_add_table') }}" class="nav-link {{ ($route=='show_deliveryBoy_add_table')?'active':'' }}">
                <i class="fa fa-plus-circle nav-icon" aria-hidden="true"></i>
                  <p>Add Delivery Boy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('delivery_boy_manage') }}" class="nav-link  {{ ($route=='delivery_boy_manage')?'active':'' }}">
                <i class="fa fa-edit nav-icon" aria-hidden="true"></i>
                  <p>Manage Delivery Boy</p>
                </a>
              </li>
        </ul>
      </li>
<!-- Coupon start here -->
      <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ ($prefix=='/coupon')?'menu-open':'' }}">
            <i class="nav-icon fas fa-tachometer-alt" aria-hidden="true"></i>
              <p>
                Coupon Code
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_coupon_table') }}" class="nav-link {{ ($route=='show_coupon_table')?'active':'' }}">
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                  <p>Add Coupon Code</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_coupon_code') }}" class="nav-link {{ ($route=='manage_coupon_code')?'active':'' }}">
                <i class="far fa-circle nav-icon" aria-hidden="true"></i>
                  <p>Manage Coupon Code</p>
                </a>
              </li>
        </ul>
      </li>

      <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ ($prefix=='/dish')?'menu-open':'' }}">
            <i class="nav-icon fa fa-bars" aria-hidden="true"></i>
              <p>
                Dish
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_dish_table') }}" class="nav-link {{ ($route=='show_dish_table')?'active':'' }}">
                <i class="fa fa-plus-circle nav-icon" aria-hidden="true"></i>
                  <p>Generate Dish</p>  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_dish_table') }}" class="nav-link {{ ($route=='manage_dish_table')?'active':'' }}">
                <i class="fa fa-edit nav-icon" aria-hidden="true"></i>
                  <p>Manage Dish</p>
                </a>
              </li>
        </ul>
      </li>
      <!-- Coupon end here -->

      <!-- Order start here -->
 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart" aria-hidden="true"></i>
              <p>
                Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_order') }}" class="nav-link active">
                <i class="fas fa-shopping-cart nav-icon" aria-hidden="true"></i>
                  <p>Manage Order</p>  
                </a>
              </li>
        </ul>
      </li>
      <!-- Order end here -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>