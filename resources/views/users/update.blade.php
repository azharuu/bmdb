@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{$judul}}</a></li>
        <li><a href="#">Create</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$judul}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/user" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{$data->id}}">
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{$data->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{$data->email}}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" >
                            <label  class="col-md-4 col-form-label text-md-right">Role</label>
                            <div class="col-md-6">
                                <select class="form-control" name="role">
                                    <option value="1">Administrator</option>
                                    <option value="2">User</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-check row">
                            <label class="form-check-label col-md-4 text-md-right" for="exampleRadios1">
                                Male
                            </label>
                            <input class="form-check-input col-md-1" type="radio" name="gender" id="exampleRadios1"
                                   value="male" checked>

                        </div>

                        <div class="form-check row">
                            <label class="form-check-label col-md-4 text-md-right" for="exampleRadios2">
                                Female
                            </label>
                            <input class="form-check-input col-md-1" type="radio" name="gender" id="exampleRadios2"
                                   value="female">

                        </div>

                        <div class="form-group row">
                            <label for="address"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text"
                                       class="form-control @error('address') is-invalid @enderror" name="address"
                                       value="{{$data->address}}"required autocomplete="address" autofocus>

                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="md-form row">
                            <label for="date-picker-example" class="col-md-4 text-md-right">Birth Date</label>
                            <input placeholder="08/19/2011" type="date" id="date-picker-example" class="form-control datepicker col-md-6" name="birthday" value="{{$data->birthday}}">

                        </div>

                        <div class="input-group">
                            <div class="custom-file row">
                                <label class="custom-file-label col-md-4" for="inputGroupFile02">Choose file</label>
                                <input type="file" class="custom-file-input col-md-6" id="inputGroupFile02" name="picture">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
            <div class="col-md-4">
            </div>
        </div>
@endsection

