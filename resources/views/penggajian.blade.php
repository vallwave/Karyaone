@extends('layout.penggajian')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0">Penggajian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Halaman Penggajian</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Penggajian </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  

                    <div class="input-group-append">
                  
                  <form action="" method="post" class="d-inline">
                    @csrf
                    <input type="hidden" name="cari" value="">
                <input class="btn btn-primary  ml-1 mt-2 mt-sm-0" type="submit" id="babeng-submit"  onclick="return  confirm('Anda yakin generate data gaji bulan ini? Y/N')"  data-toggle="tooltip" data-placement="top"
                value="Generate Gaji">
                </form>
                  
                        
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              
          
        
      </div>
    

                
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>  </div>
   
@endsection