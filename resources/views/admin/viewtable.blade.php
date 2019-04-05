{{--@extends('admin.master')--}}
{{--@section('title')--}}
    {{--view table--}}
{{--@endsection()--}}

{{--@section('body')--}}
    {{--<style>--}}
        {{--.tableview{--}}
            {{--margin-top: 10px;--}}
        {{--}--}}

        {{--.tableviewcol{--}}
            {{--width: 250px;--}}
            {{--height: 200px;--}}
        {{--}--}}

        {{--.buttonalign{--}}
            {{--text-align: center;--}}
        {{--}--}}
    {{--</style>--}}
    {{--<div class="container-fluid" >--}}

        {{--<div class="row" style="padding-top: 10px">--}}
            {{--<div class="col-md-12">--}}

                {{--<div class="row" style="margin-bottom: 10px;">--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table1.jpg')}}"></a>--}}
                        {{--</div>--}}
                       {{--<div class="col-md-12 buttonalign">--}}
                           {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                           {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                           {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                       {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table2.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table3.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table4.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row" style="margin-bottom: 10px;">--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table5.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table6.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table7.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table8.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row" style="margin-bottom: 10px;">--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table9.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table10.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table11.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="col-md-3 ">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a href="{{route('table1')}}" ><img class="img-circle tableviewcol" src="{{asset('frontEnd/table/table12.jpg')}}"></a>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12 buttonalign">--}}
                            {{--<a href="" class="btn btn-info tableview btn-sm">Details</a>--}}
                            {{--<a href="#edittable" rel="modal:open" class="btn btn-warning tableview btn-sm" >Edit</a>--}}
                            {{--<a href="" class="btn btn-danger tableview btn-sm">Delete</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}



            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--@endsection()--}}