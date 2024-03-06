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
              <li class="breadcrumb-item active">Halaman Karyawan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <a href="{{ route('admin.tambahkaryawan') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Karyawan </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  

                    <div class="input-group-append">
                      
                        
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><center>No</center></th>
                      <th><center>NIP</center></th>
                      <th><center>NIK</center></th>
                      <th><center>Nama</center></th>
                      <th><center>Jenis Kelamin</center></th>
                      <th><center>Tempat Lahir</center></th>
                      <th><center>Tanggal Lahir</center></th>
                      <th><center>Telpon</center></th>
                      <th><center>Agama</center></th>
                      <th><center>Status Nikah</center></th>
                      <th><center>Alamat</center></th>
                      <th><center>Golongan</center></th>
                      <th><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($karyawan as $k)
                    <tr>
                      <td><center>{{ $loop->iteration }}</center></td>
                     <td><center>{{ $k->nip }}</center></td>
                     <td><center>{{ $k->nik }}</center></td>
                     <td><center>{{ $k->nama }}</center></td>
                     <td><center>{{ $k->jenis_kelamin }}</center></td>
                     <td><center>{{ $k->tempat_lahir }}</center></td>
                     <td><center>{{ $k->tanggal_lahir }}</center></td>
                     <td><center>{{ $k->telpon }}</center></td>
                     <td><center>{{ $k->agama }}</center></td>
                     <td><center>{{ $k->status_nikah }}</center></td>
                     <td><center>{{ $k->alamat }}</center></td>
                     <td><center>{{ $k->golongan_id }}</center></td>
                      <td>
                        <a href="{{ route('admin.editkaryawan',['id' => $k->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                        <a data-toggle="modal" data-target="#modal-hapus{{ $k->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                      </td>
                     </tr>
                     <div class="modal fade" id="modal-hapus{{ $k->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Kamu yakin ingin menghapus karyawan atas nama: <b>{{ $k->nama }}</b></p>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="{{ route('admin.deletekaryawan',['id' => $k->id]) }}" method="post">
                @csrf  
                @method('delete')
              <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
              <button type="submit" class="btn btn-primary">Ya,Hapus</button>
              </form>
            </div>
          </div>
         
        </div>
        
      </div>
                @endforeach

                
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>  </div>
   
@endsection