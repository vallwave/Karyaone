@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman Admin</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <a href="{{ route('admin.tambahuser') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Admin </h3>

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
                      <th><center>Nama</center></th>
                      <th><center>Email</center></th>
                      <th><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>

                @foreach ($data as $d)
                    <tr>
                      <td><center>{{ $loop->iteration }}</center></td>
                      <td><center>{{ $d->name}}</center></td>
                      <td><center>{{ $d->email}}</center></td>
                      <td>
                        <center>
                        <a href="{{ route('admin.edituser',['id' => $d->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                        <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                        </center>
                      </td>
                     </tr>
                     <div class="modal fade" id="modal-hapus{{ $d->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Kamu yakin ingin menghapus data user <b>{{ $d->name }}</b></p>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="{{ route('admin.deleteuser',['id' => $d->id]) }}" method="post">
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
    </section>
  </div>
@endsection