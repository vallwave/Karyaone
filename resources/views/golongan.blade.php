@extends('layout.golongan')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0">Golongan </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman Golongan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <a href="{{ route('admin.tambahgolongan') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Golongan </h3>

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
                      <th>No</th>
                      <th><center>Nama Golongan</center></th>
                      <th><center>Tunjangan Istri</center></th>
                      <th><center>Tunjangan Anak</center></th>
                      <th><center>Tunjangan Transport</center></th>
                      <th><center>Tunjangan Makan</center></th>
                      <th><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>

                @foreach ($golongan as $g)
                    <tr>
                      <td><center>{{ $loop->iteration }}</center></td>
                      <td><center>{{ $g->nama_golongan}}</center></td>
                      <td><center>{{ $g->tunjangan_istri}}</center></td>
                      <td><center>{{ $g->tunjangan_anak}}</center></td>
                      <td><center>{{ $g->tunjangan_transport}}</center></td>
                      <td><center>{{ $g->tunjangan_makan}}</center></td>
                      <td>
                        <a href="{{ route('admin.editgolongan',['id' => $g->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                        <a data-toggle="modal" data-target="#modal-hapus{{ $g->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                      </td>
                     </tr>
                     <div class="modal fade" id="modal-hapus{{ $g->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Kamu yakin ingin menghapus golongan <b>{{ $g->nama_golongan }}</b></p>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="{{ route('admin.deleteuser',['id' => $g->id]) }}" method="post">
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