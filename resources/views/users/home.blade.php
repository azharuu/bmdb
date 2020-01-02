@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')
    <div class="col-md-8">
{{--        <a href="employee/create">--}}
{{--            <button class="btn-primary">--}}
{{--                Create Employee--}}
{{--            </button>--}}
{{--        </a>--}}
        <div class="box" >
            <div class="box-header">
                <h3 class="box-title">Table {{$judul}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>#</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->address}}</td>

                            @if(Auth::user()->id == $d->id)
                                <td><a href="/user/edit/{{$d->id}}">Update Profile</a></td>
                            @else
                                <td><a href="">Send Message</a></td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-4">

    </div>

@endsection
