@extends('layout.karyawan')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Karyawan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
         <form action="{{ route('admin.storekaryawan') }}" method="post">
            @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Karyawan</h3>
              </div>
              <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">NIP ( Nomor Identitas Pegawai )</label>
                    <input type="text"  class="form-control" name="text" placeholder="Masukan NIP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK ( Nomor Induk Kependudukan )</label>
                    <input type="text"  class="form-control" name="text" placeholder="Masukan NIK">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text"  class="form-control" name="text" placeholder="Masukan Nama Anda">
                  </div>
                  <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control select2"  style="width: 100%;">
                    <option selected="selected"></option>
                    <option>Pria</option>
                    <option>Wanita</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text"  class="form-control" name="text" placeholder="Masukan Tempat Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date"  class="form-control" name="text" placeholder="Masukan NIK">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telpon</label>
                    <input type="number"  class="form-control" name="text" placeholder="Masukan Telpon">
                  </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control select2"  style="width: 100%;">
                    <option selected="selected"></option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Menikah</label>
                  <select class="form-control select2"  style="width: 100%;">
                    <option selected="selected"></option>
                    <option>Belum Nikah</option>
                    <option>Nikah</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Lengkap</label>
                    <input type="text"  class="form-control" name="text" placeholder="Masukan Alamat Anda">
                  </div>
                  <div class="form-group">
                  <label>Golongan</label>
                  <select class="form-control select2"  style="width: 100%;">
                    <option selected="selected"></option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </section>
  </div>
@endsection