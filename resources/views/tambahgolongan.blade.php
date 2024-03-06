@extends('layout.golongan')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Golongan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Golongan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
         <form action="{{ route('admin.storegolongan') }}" method="post">
            @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Golongan</h3>
              </div>
            
              <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Golongan</label>
                    <input type="text"  class="form-control" name="text" placeholder="Masukan Golongan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Istri</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"  placeholder="Masukan Tunjangan Istri">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tunjangan Anak</label>
                    <input type="text "name="text" class="form-control"  placeholder="Masukan Tunjangan Anak">   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Transport</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"  placeholder="Masukan Tunjangan Transport">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Makan</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"  placeholder="Masukan Tunjangan Makan">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div> 
    </section>
  </div>
@endsection