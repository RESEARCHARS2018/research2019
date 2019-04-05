{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>--}}
{{----}}
<!-- jQuery Modal -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />--}}



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('admin/adminlte/dist/')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Restaurant Logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{--<div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
            {{--<div class="image">--}}
                {{--<img src="{{asset('admin/adminlte/dist/')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
            {{--</div>--}}
            {{--<div class="info">--}}
                {{--<a href="#" class="d-block">Alexander Pierce</a>--}}
            {{--</div>--}}
        {{--</div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('admin/dashboard')}}" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                           User Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user',['role'=>"admin"])}}" class="nav-link">
                                {{--value thakbe sei unojaie table a data asbe--}}

                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user',['role'=>"manager"])}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Manager</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="
{{--{{route('user')}}--}}
                                    " class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Waiter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user',['role'=>"salesman"])}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Sales Man</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user',['role'=>"deliveryman"])}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Delivery Man</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('user',['role'=>"gateman"])}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Gate Man</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('user',['role'=>"customer"])}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Customer</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{--Menu Management--}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-pencil-square"></i>
                        <p>
                            Menu management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#catagory_model" rel="modal:open" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Catagory</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="
{{--{{route('menuEdit')}}--}}
                                    " class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View Food</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#addfood" rel="modal:open" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Food</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            Table Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="
{{--{{route('bookinglist')}}--}}
                                    " class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Booking List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#addtable" rel="modal:open" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Table</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="
{{--{{asset('admin/tableview')}}--}}
                                    " class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>View Table</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-archive"></i>
                        <p>
                            Stock Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="
{{--{{route('user')}}--}}
                                    " class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                             <p>Add stock</p>     {{--add daily bazar by one form .there we can add daily bazar--}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin/adminlte/pages/')}}/charts/flot.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Closing Report</p>
                            </a>
                        </li>



                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-address-card-o"></i>
                        <p>
                            Sells Report
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="
{{--{{route('user')}}--}}
                                    " class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Daily Report</p>     {{--add daily bazar by one form .there we can add daily bazar--}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Weekly Report</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Monthly Report</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Yearly Report</p>
                            </a>
                        </li>



                    </ul>
                </li>



                {{--<li class="nav-item has-treeview menu-open">--}}
                    {{--<a href="{{route('admin/resevation')}}" class="nav-link ">--}}
                        {{--<i class="nav-icon fa fa-table"></i>--}}
                        {{--<p>--}}
                            {{--Sells Report--}}

                        {{--</p>--}}
                    {{--</a>--}}

                {{--</li>--}}





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



