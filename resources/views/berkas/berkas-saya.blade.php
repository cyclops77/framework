



<!DOCTYPE html>
<html>
<head>
  <title></title>
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
   <div class="col-md-10">

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

<br>
   
<table class="table table-striped table-hover" width="100%">
  <thead>
    <th>ID</th>
    <th>Keperluan</th>
    <th>Tanggal</th>
    <th>Keterangan</th>
    <th>File</th>
  </thead>
  <tbody>
    @foreach($files as $f)
   <tr>
     <td>{{$f->id}}</td>
     <td>{{$f->nama_file}}</td>
     <td>{{$f->alias}}</td>
     <td>{{$f->keterangan}}</td>
     <td>
       <a href="file_berkas/{{$f->lampiran}}" download="">{{$f->lampiran}}</a>
     </td>
   </tr>
   @endforeach
  </tbody>
</table>


</div>
  </div>


   
</body>
</html>