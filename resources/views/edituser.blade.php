@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
         <form action="{{ route('admin.updateuser',['id' =>$data->id]) }}" method="post">
            @csrf
            @method('PUT')
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit User</h3>
              </div>
              <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email"  class="form-control" id="exampleInputEmail1" name="email" value="{{ $data->email }}" placeholder="Enter email">
                    @error('email')
                     <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"  value="{{ $data->name }}" placeholder="Enter Name">
                    @error('nama')
                     <small>{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"   placeholder="Password">
                    @error('password')
                     <small>{{ $message }}</small>
                    @enderror
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </section>
  </div>
@endsection