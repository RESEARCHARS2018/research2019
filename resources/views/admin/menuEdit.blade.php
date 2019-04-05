@extends('admin.master')
@section('title')
    @endsection()

@section('menuEdit')


    <div class="col-md-12 container-fluid">
        <div class="box box-primary">
            <div class="box box-body ">
              <table class="table tab-pane">
                  <tr class="jumbotron rounded font-weight-bold">
                      <td class="col-md-3">
                          <img src="{{asset('frontEnd/images/g2.jpg')}}" class="img-circle eximg">
                          #Brekfast</td>
                      <td class="col-md-6"></td>
                      <td class="col-md-3">
                          <a href="{{route('foodview')}}" class="btn btn-primary " id="brekfast">view </a>
                      </td>
                  </tr>




                  <tr class="jumbotron rounded font-weight-bold">
                      <td class="col-md-3">
                          <img src="{{asset('frontEnd/images/g1.jpg')}}" class="img-circle eximg">
                          #Meal</td>
                      <td class="col-md-6"></td>
                      <td class="col-md-3">
                          {{--<a href="{{route('foodview')}}" class="btn btn-primary" id="meals">view</a>--}}
                      </td>
                  </tr>

                  <tr class="jumbotron rounded font-weight-bold">
                      <td class="col-md-3">
                          <img src="{{asset('frontEnd/images/g3.jpg')}}" class="img-circle eximg">
                          #name of catagory</td>
                      <td class="col-md-6"></td>
                      <td class="col-md-3">
                          <a href="" class="btn btn-primary">view </a>
                      </td>
                  </tr>

                  <tr class="jumbotron rounded font-weight-bold">
                      <td class="col-md-3">
                          <img src="{{asset('frontEnd/images/g4.jpg')}}" class="img-circle eximg">
                          #name of catagory</td>
                      <td class="col-md-6"></td>
                      <td class="col-md-3">
                          <a href="" class="btn btn-primary">view</i> </a>
                      </td>
                  </tr>
              </table>
            </div>

        </div>
    </div>

    {{--another--}}


    @endsection()