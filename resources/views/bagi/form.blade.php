



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="{{asset('bootstrapCustom/js/addons/datatables.min.js')}}"></script>
  <link href="{{asset('bootstrapCustom/css/addons/datatables.min.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
  <div class="container">
   <div class="col-md-12">

    @if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-success" >
      {{session('gagal')}}
    </div>
    @endif
<style type="text/css">
  .my-custom-scrollbar {
position: relative;
height: 550px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>


<br>
   <form method="POST" action="{{url('/send/kirim-berkas')}}" enctype="multipart/form-data">
          {{csrf_field()}}
  
    <div class="form-group">


<div class="row">
  <div class="col-md-6" >
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#semua" role="tab" aria-controls="home" aria-selected="true">Semua Role</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#bendahara" role="tab" aria-controls="profile" aria-selected="false">Bendahara</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#karyawan" role="tab" aria-controls="contact" aria-selected="false">Karyawan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#manager" role="tab" aria-controls="contact" aria-selected="false">Manager</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane" id="semua" role="tabpanel" aria-labelledby="home-tab">
    <div class="table-wrapper-scroll-y my-custom-scrollbar">

  <table class="table table-bordered table-striped mb-0">
                <thead class="table-active">
                <th width="3%" class="text-center">#</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Email</th>
                </thead>
                <tbody>
                    
        @foreach($AllRole as $allrole)
                    <tr>
                <td>
                <input type="checkbox" name="person[]" value="{{$allrole->id}}">     
                </td> 
                    <td class="text-center">
                      {{$allrole->id}}
                    </td>
                    <td class="text-center">
                      {{$allrole->role}}
                    </td>
                    <td class="text-center">
                      {{$allrole->name}}
                    </td>
                    <td class="text-center">
                      {{$allrole->email}}    
                    </td>
                    </tr>
        @endforeach
                </tbody>
            </table>
          </div>
          </div>
  <div class="tab-pane fade" id="bendahara" role="tabpanel" aria-labelledby="profile-tab">
    <div class="table-wrapper-scroll-y my-custom-scrollbar">

  <table class="table table-bordered table-striped mb-0">
                <thead class="table-active">
                <th width="3%" class="text-center">#</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Email</th>
                </thead>
                <tbody>
                    
        @foreach($RoleBendahara as $rb)
                    <tr>
                <td>
                <input type="checkbox" name="person[]" value="{{$rb->id}}">     
                </td> 
                    <td class="text-center">
                      {{$rb->id}}
                    </td>
                    <td class="text-center">
                      {{$rb->name}}
                    </td>
                    <td class="text-center">
                      {{$rb->email}}    
                    </td>
                    </tr>
        @endforeach
                </tbody>
            </table>
          </div>
  </div>
  <div class="tab-pane fade" id="karyawan" role="tabpanel" aria-labelledby="contact-tab">
   
   <div class="table-wrapper-scroll-y my-custom-scrollbar">

  <table class="table table-bordered table-striped mb-0" id="dtDynamicVerticalScrollExample" >
                <thead class="table-active">
                <th width="3%" class="text-center">#</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Email</th>
                </thead>
                <tbody>
                    
        @foreach($RoleKaryawan as $rk)
                    <tr>
                <td>
                <input type="checkbox" name="person[]" value="{{$rk->id}}">     
                </td> 
                    <td class="text-center">
                      {{$rk->id}}
                    </td>
                    <td class="text-center">
                      {{$rk->name}}
                    </td>
                    <td class="text-center">
                      {{$rk->email}}    
                    </td>
                    </tr>
        @endforeach
                </tbody>
            </table>
          </div>
  </div>
  <div class="tab-pane fade" id="manager" role="tabpanel" aria-labelledby="contact-tab">
<div class="table-wrapper-scroll-y my-custom-scrollbar">

  <table class="table table-bordered table-striped mb-0">
                <thead class="table-active">
                <th width="3%" class="text-center">#</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Email</th>
                </thead>
                <tbody>
                    
        @foreach($RoleManager as $rg)
                    <tr>
                <td>
                <input type="checkbox" name="person[]" value="{{$rg->id}}">     
                </td> 
                    <td class="text-center">
                      {{$rg->id}}
                    </td>
                    <td class="text-center">
                      {{$rg->name}}
                    </td>
                    <td class="text-center">
                      {{$rg->email}}    
                    </td>
                    </tr>
        @endforeach
                </tbody>
            </table>
          </div>
  </div>
</div>
</div>

<!-- Row KEDUA -->

<div class="col-md-6">
   <div class="form-group">
    <label for="exampleInputEmail1">Nama File</label>
    <input type="text" class="form-control" placeholder="Nama File" name="nama_file">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Catatan</label>
    <input type="text" class="form-control" name="alias">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keterangan</label>
    <input type="text" class="form-control" name="keterangan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lampiran</label>
    <input type="file" class="form-control" name="file">
  </div>
</div>


</div>



    </div>


  <button type="submit" class="btn btn-primary">
    Kirim Laporan Keuangan
  </button>

</form>
</div>
  </div>


  <script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script>  

</body>
</html>