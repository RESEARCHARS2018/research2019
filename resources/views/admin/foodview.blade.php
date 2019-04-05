@extends('admin.master')
@section('title')
    Food view
    @endsection()

@section('body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Brekfast Item</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Food_Id</th>
                    <th>Action</th>

                </tr>
                <tr>
                    <td>1.</td>
                    <td >
                        <img src="{{asset('frontEnd/images/g1.jpg')}}" class="img-circle eximg">
                    </td>
                    <td>Name of Food</td>
                    <td>description of food</td>
                    <td>290tk</td>
                    <td>F11234</td>
                    <td>
                        <a href="#editfood" rel="modal:open" class="btn btn-warning">edit</a>
                        <a href="" class="btn btn-danger">delete</a>
                    </td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td >
                        <img src="{{asset('frontEnd/images/g2.jpg')}}" class="img-circle eximg">
                    </td>
                    <td>Name of Food</td>
                    <td>description of food</td>
                    <td>390tk</td>
                    <td>F11236</td>
                    <td>
                        <a href="#editfood" rel="modal:open" class="btn btn-warning">edit</a>
                        <a href="" class="btn btn-danger">delete</a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>

            </ul>
        </div>
    </div>
    @endsection()