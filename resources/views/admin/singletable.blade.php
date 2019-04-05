@extends('admin.master')
@section('title')
    single table
    @endsection()

@section('body')
    <div class="container-fluid" style="background-color: #A51C21;">
        <div class="row">

            <div class="col-md-8">
                <img src="{{asset('frontEnd/table/table1.jpg')}}">
            </div>
            <div class="col-md-4" style="padding-top: 50px;text-decoration: none;padding-left: 0px;color: black;">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Table No</th>
                        <th>maximun-Sit-limit</th>
                        <th>Description</th>
                        <th>Smoking</th>


                    </tr>
                    <tr>
                        <td>1</td>
                        <td>6</td>
                        <td>this is best restaurant in bangladesh</td>
                        <td>Not Allow</td>
                    </tr>
                </table>

                {{--{{route('reservation')}}--}}
                <a href="" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">Booking</a>


            </div>


        </div>




    </div>
    @endsection()