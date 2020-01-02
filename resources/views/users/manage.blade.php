@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')


    <div class="col-md-10">
        <a href="karyawan/create">
            <button class="btn-primary">
                Add User
            </button>
        </a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table {{$judul}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Profile Picture</th>
                        <th>DOB</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $d)

                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->email}}</td>
                            @if($d->role == 1)
                                <td>Admin</td>
                            @else
                                <td>Member</td>
                            @endif
                            <td>{{$d->gender}}</td>
                            <td>{{$d->address}}</td>
                            <td>{{$d->picture}}</td>
                            <td>{{$d->birthday}}</td>
                            <th>
                                <a href="/karyawan/edit/{{$d->id}}">EDIT</a>
                                |
                                <a href="/karyawan/delete/{{$d->id}}">DELETE</a>
                            </th>
                        </tr>
                    @endforeach
                    {{ $data->links() }}
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-2">

    </div>

@endsection
